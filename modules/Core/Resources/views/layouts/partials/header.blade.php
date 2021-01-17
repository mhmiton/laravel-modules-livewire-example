<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/laravel.svg') }}" alt="Laravel" class="logo-mini me-2" title="Laravel">
            <img src="{{ asset('assets/images/modules.png') }}" alt="Laravel Modules" class="logo-mini me-2" title="Laravel Modules">
            <img src="{{ asset('assets/images/livewire.png') }}" alt="Laravel Livewire" class="logo-mini me-2" title="Laravel Livewire">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == '') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'table') ? 'active' : '' }}" href="{{ route('table') }}">Table</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'form') ? 'active' : '' }}" href="{{ route('form') }}">Form</a>
                </li>
            </ul>
        </div>
    </div>
</nav>