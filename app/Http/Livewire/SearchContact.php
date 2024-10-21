<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Actions\ContactGetPropertiesAction;
use App\Actions\ContactStoreAction;
use App\Http\Livewire\Traits\ContactPropertiesMessagesValidationTrait;
use App\Http\Livewire\Traits\ContactPropertiesRulesValidationTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Console\Application;
use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ViaCep\ViaCepService;
use WireUi\Traits\Actions;
use App\Models\Contact;

class SearchContact extends Component
{
    use ContactPropertiesMessagesValidationTrait;
    use ContactPropertiesRulesValidationTrait;
    use WithPagination;
    use Actions;

    public array $data = [
        'name' => '',
        'phone' => '',
        'email' => ''
    ];

    public string $search = '';

    protected $queryString = ['search'];

    public function updated(string $key, string $value): void
    {
        $name = $this->data['name'];
        $phone = $this->data['phone'];
        $email = $this->data['email'];

        if ($key === 'data.zipcode') {
            $cepData = ViaCepService::handle($value);

            if (
                !empty($cepData['erro'])
                || empty($cepData)
            ) {
                $this->notification()->error('CEP não encontrado', 'O CEP informado não foi encontrado.');

                return;
            }

            $this->data = $cepData;
        }

        $this->data['name'] = $name;
        $this->data['phone'] = $phone;
        $this->data['email'] = $email;
    }

    public function save(): void
    {
        $this->validate();

        ContactStoreAction::save($this->data);

        $this->showNotification('Criação/Atualização', 'O contato foi criado/atualizado com sucesso.');

        $this->resetExcept('contacts');
    }

    public function edit(string $id): void
    {
        $this->data = ContactGetPropertiesAction::handle($id);
    }

    public function remove(string $id): void
    {
        Contact::find($id)?->delete();

        $this->showNotification('Exclusão de Contato', 'Contato excluído com sucesso.');
    }

    private function showNotification(string $title, string $message):void
    {
        $this->notification()->success($title, $message);
    }

    public function getContactProperty()
    {
        if ($this->search) {
            return Contact::where('name', 'like', "%{$this->search}%")
                ->orWhere('email', 'like', "%{$this->search}%")
                ->orWhere('zipcode', 'like', "%{$this->search}%")
                ->orWhere('street', 'like', "%{$this->search}%")
                ->orWhere('neighborhood', 'like', "%{$this->search}%")
                ->orWhere('city', 'like', "%{$this->search}%")
                ->orWhere('state', 'like', "%{$this->search}%")
                ->paginate(5);
        }

        return Contact::paginate(5);
    }

    public function mount():void
    {
        $this->data = ContactGetPropertiesAction::getEmptyProperties();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.search-contact');
    }
}