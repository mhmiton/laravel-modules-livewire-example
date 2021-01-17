<?php

namespace Modules\Core\Http\Livewire\Pages;

use Livewire\Component;

class TablePage extends Component
{
    public function render()
    {
        return view('core::livewire.pages.table')
            ->extends(config('core.extends.frontend'));
    }
}