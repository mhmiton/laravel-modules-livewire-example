<?php

namespace Modules\Core\Livewire\Pages;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('core::livewire.pages.home-page')
            ->layout(config('core.layouts.frontend'));
    }
}
