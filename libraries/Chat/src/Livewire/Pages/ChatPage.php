<?php

namespace Libraries\Chat\Livewire\Pages;

use Livewire\Component;

class ChatPage extends Component
{
    public function render()
    {
        return view('chat::livewire.pages.chat')
            ->layout(config('core.layouts.frontend'));
    }
}
