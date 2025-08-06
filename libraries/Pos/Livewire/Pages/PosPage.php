<?php

namespace Libraries\Pos\Livewire\Pages;

use Livewire\Component;

class PosPage extends Component
{
    public function render()
    {
        return view('pos::livewire.pages.pos-page')
            ->layout(config('core.layouts.frontend'));
    }
}
