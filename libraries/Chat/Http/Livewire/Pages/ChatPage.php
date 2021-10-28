<?php

namespace Libraries\Chat\Http\Livewire\Pages;

use Livewire\Component;

class ChatPage extends Component
{
    public function render()
    {
        return view('chat::livewire.pages.chat')
            ->extends(config('core.extends.frontend'));
    }
}
