<?php

namespace Modules\Counter\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('counter::livewire.counter')
            ->layout(config('core.layouts.frontend'));
    }
}
