<div>
    <div class="d-flex flex-column gap-3 card shadow p-3">
        <div>
            <a class="h3 text-decoration-none" href="{{ url('counter-livewire') }}?fullpage=true">
                Counter Livewire: {{ $count ?? 0 }}
            </a>
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-primary" wire:click="increment" wire:loading.attr="disabled">+</button>
            <button class="btn btn-primary" wire:click="decrement" wire:loading.attr="disabled">-</button>
        </div>

        <div>
            <code>Class: Modules\Counter\Livewire\Counter::class</code><br />
            <code>View: modules/Counter/resources/views/livewire/counter.blade.php</code>
        </div>
    </div>
</div>
