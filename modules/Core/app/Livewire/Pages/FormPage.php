<?php

namespace Modules\Core\Livewire\Pages;

use Livewire\Component;

class FormPage extends Component
{
    public function render()
    {
        return view('core::livewire.pages.form-page')
            ->layout(config('core.layouts.frontend'));
    }
}
