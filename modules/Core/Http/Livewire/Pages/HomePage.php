<?php

namespace Modules\Core\Http\Livewire\Pages;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('core::livewire.pages.home')
            ->extends(config('core.extends.frontend'));
    }
}