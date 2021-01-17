<?php

namespace Modules\Core\Http\Livewire\Pages;

use Livewire\Component;

class FormPage extends Component
{
    public function render()
    {
        return view('core::livewire.pages.form')
            ->extends(config('core.extends.frontend'));
    }
}