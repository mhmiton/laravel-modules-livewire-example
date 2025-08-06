<?php

namespace Modules\Core\Livewire\Pages;

use Livewire\Component;

class TablePage extends Component
{
    public function render()
    {
        return view('core::livewire.pages.table-page')
            ->layout(config('core.layouts.frontend'));
    }
}
