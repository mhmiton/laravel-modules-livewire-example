<?php

namespace Modules\Core\Http\Livewire\Components\Input;

use Livewire\Component;

class Index extends Component
{
    public $type = 'text';

    public $name;

    public $required;

    public function render()
    {
        return <<<'blade'
            <div>
                <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $name }}" {{ $required ? 'required' : '' }} />
            </div>
        blade;
    }
}
