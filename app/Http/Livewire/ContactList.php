<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ContactList extends Component
{

    public function index()
    {
        return Contact::all();
    }

    // public function mount()
    // {
    //     // $data = collect(Contact::all());
    //     return response()->json(
    //         Contact::all(),
    //         200
    //     );
    // }

    // public function render()
    // {
    //     return view('livewire.contact-list');
    // }
}