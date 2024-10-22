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

    /**
     * Realiza a validação e busca do CEP via API
    */
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

    /**
     * Cadastra um novo contato
    */
    public function save(): void
    {
        $this->validate();

        ContactStoreAction::save($this->data);

        $this->notification()->success('Criação/Atualização', 'O contato foi criado/atualizado com sucesso.');

        $this->resetExcept('contacts');
    }

    /**
     * Realiza a edição do contato
    */
    public function edit(string $id): void
    {
        $this->data = ContactGetPropertiesAction::handle($id);
    }

    /**
     * Realiza a remoção do contato
    */
    public function remove(string $id): void
    {
        Contact::find($id)?->delete();

        $this->notification()->success('Exclusão de Contato', 'Contato excluído com sucesso.');
    }

    /**
     * Busca as propriedades do contato
    */
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

        return Contact::paginate(3);
    }

    /**
     * Método construtor do componente
    */
    public function mount(): void
    {
        $this->data = ContactGetPropertiesAction::getEmptyProperties();
    }

    /**
     * Renderiza a view do componente
    */
    public function render(): Factory|View|Application
    {
        return view('livewire.search-contact');
    }
}