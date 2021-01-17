<?php

namespace Modules\Core\Http\Livewire\Components;

use Livewire\Component;

class TableComponent extends Component
{
    public $users;

    public function mount()
    {
        $users = \Http::get('https://jsonplaceholder.typicode.com/users')->json();

        $usersObjects = json_decode(json_encode($users));

        $this->users = collect($usersObjects);
    }

    public function render()
    {
        return view('core::livewire.components.table');
    }
}