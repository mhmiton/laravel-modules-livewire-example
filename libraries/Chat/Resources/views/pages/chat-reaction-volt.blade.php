<?php

use Livewire\Attributes\{Layout};
use Livewire\Volt\Component;

new
#[Layout('core::components.layouts.app')]
class extends Component {
    public $reaction;
} ?>

<div>
    <div class="d-flex flex-column gap-3 card shadow p-3">
        <div>
            <a class="h3 text-decoration-none" href="#">
                Chat Reaction Volt: {{ $reaction ?? 'N/A' }}
            </a>
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-primary" wire:click="$set('reaction', '👍 Like')" wire:loading.attr="disabled">👍 Like</button>
            <button class="btn btn-primary" wire:click="$set('reaction', '❤️ Love')" wire:loading.attr="disabled">❤️ Love</button>
        </div>

        <div>
            <code>View: libraries/Chat/resources/views/pages/chat-reaction-volt.blade.php</code>
        </div>
    </div>
</div>
