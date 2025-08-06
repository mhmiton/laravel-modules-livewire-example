@push('head')
    <style>
        .card-list-minimal div .card,
        .card-list-minimal div .card {
            border-radius: 0;
        }

        .card-list-minimal div:first-child .card {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
        }

        .card-list-minimal div:last-child .card {
            border-bottom-left-radius: .25rem;
            border-bottom-right-radius: .25rem;
        }
    </style>
@endpush

<x-dynamic-component :component="strtr(config('core.layouts.frontend'), ['components.' => ''])">
    <div class="container py-5">
        <div class="text-center mb-3">
            <h1 class="text-primary">Livewire Volt</h1>
        </div>

        <div class="card-list-minimal">
            <livewire:counter::counter />

            <livewire:counter::counter-volt />

            <livewire:counter::counter-pages-volt />

            <livewire:counter::counter-pages-volt-functional />

            <livewire:chat::chat-reaction-volt />
        </div>
    </div>
</x-dynamic-component>
