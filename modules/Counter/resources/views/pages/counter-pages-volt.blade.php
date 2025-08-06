<?php

use Livewire\Attributes\{Layout};
use Livewire\Volt\Component;

new
#[Layout('core::components.layouts.app')]
class extends Component {
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
} ?>

<div>
    <div class="d-flex flex-column gap-3 card shadow p-3">
        <div>
            <a class="h3 text-decoration-none" href="{{ url('counter-pages-volt') }}?fullpage=true">
                Counter Pages Volt: {{ $count ?? 0 }}
            </a>
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-primary" wire:click="increment" wire:loading.attr="disabled">+</button>
            <button class="btn btn-primary" wire:click="decrement" wire:loading.attr="disabled">-</button>
        </div>

        <div>
            <code>View: modules/Counter/resources/views/pages/counter-pages-volt.blade.php</code>
        </div>
    </div>
</div>
