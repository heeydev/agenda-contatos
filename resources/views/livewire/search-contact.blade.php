<div>
    <x-notifications />
    <form class="p-8 bg-gray-100 flex flex-col w-1/2 mx-auto gap-4">
        <h1>Cadastro de Contato</h1>
        <div class="flex flex-col w-1/2">
            <x-input wire:model="data.name" label='Nome' placeholder='Informe o seu nome' />
        </div>
        <div class="flex flex-col w-1/2">
            <x-input wire:model="data.phone" label='Telefone' placeholder='Informe o seu telefone' />
        </div>
        <div class="flex flex-col w-1/2">
            <x-input wire:model="data.email" label='Email' placeholder='Informe o seu e-mail' />
        </div>
        <div class="flex flex-col w-1/2">
            <x-input wire:model.lazy="data.zipcode" label='CEP' placeholder='Informe o seu CEP' />
        </div>
        <div class="flex flex-col w-1/2">
            <x-input wire:model="data.street" label='Rua' placeholder='Informe a sua rua' />
        </div>
        <div class="flex flex-col w-1/2">
            <x-input wire:model="data.neighborhood" label='Bairro' placeholder='Informe o seu bairro' />
        </div>
        <div class="flex flex-col w-1/2">
            <x-input wire:model="data.city" label='Cidade' placeholder='Informe a sua cidade' />
        </div>
        <div class="flex flex-col w-1/2">
             <x-input wire:model="data.state" label='Estado' placeholder='Informe o seu estado' />
        </div>
        <div class="flex gap-x-4">
            <x-button wire:click="save" spinner='save' positive label="Salvar contato" />
        </div>
    </form>

    <hr>
    <div class="my-8 w-[70%] container mx-auto bg-gray-100 padding-4">

        <x-input wire:model.live="search" label='Buscar Contato' placeholder='Pesquisar' />

        <table class="table-auto">
            <h1 class="px-4 py-2">Lista de Contatos</h1>
            <thead>
                <tr>
                    <th class="px-4 py-2">Nome</th>
                    <th class="px-4 py-2">Telefone</th>
                    <th class="px-4 py-2">E-mail</th>
                    <th class="px-4 py-2">CEP</th>
                    <th class="px-4 py-2">Rua</th>
                    <th class="px-4 py-2">Bairro</th>
                    <th class="px-4 py-2">Cidade</th>
                    <th class="px-4 py-2">Estado</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($this->contact as $contact)
                    <tr>
                        <td class="border px-4 py-2">{{ $contact->name }}</td>
                        <td class="border px-4 py-2">{{ $contact->phone }}</td>
                        <td class="border px-4 py-2">{{ $contact->email }}</td>
                        <td class="border px-4 py-2">{{ $contact->zipcode }}</td>
                        <td class="border px-4 py-2">{{ $contact->street }}</td>
                        <td class="border px-4 py-2">{{ $contact->neighborhood }}</td>
                        <td class="border px-4 py-2">{{ $contact->city }}</td>
                        <td class="border px-4 py-2">{{ $contact->state }}</td>
                        <td class="border px-4 py-2 flex gap-x-4">
                            <button class="text-blue-500" wire:click="edit({{ $contact->id }})" type="button">Editar</button>
                            <button class="text-red-500" wire:click="remove({{ $contact->id }})" type="button">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex justify-end">
            {!! $this->contact->links() !!}
        </div>
    </div>
</div>
