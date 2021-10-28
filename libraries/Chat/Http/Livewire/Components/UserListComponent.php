<?php

namespace Libraries\Chat\Http\Livewire\Components;

use Livewire\Component;

class UserListComponent extends Component
{
    public $users = [];

    public function mount()
    {
        $this->getUsers();
    }

    protected function getUsers()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            $this->users[] = (object) [
                'name' => $faker->name(),
            ];
        }
    }

    public function render()
    {
        return view('chat::livewire.components.user-list');
    }
}
