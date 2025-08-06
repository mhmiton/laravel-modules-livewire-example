<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

<livewire:scripts />

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let isLivewireFullPage = window.location.href.indexOf('?fullpage=true') > -1;

        if (isLivewireFullPage) {
            document.querySelector('.main>div').classList.add('container');
        }
    });

    document.addEventListener('livewire:init', function () {
        Livewire.hook('morph.updated', (message) => {
            let isLivewireFullPage = window.location.href.indexOf('?fullpage=true') > -1;

            if (isLivewireFullPage) {
                document.querySelector('.main>div').classList.add('container');
            }
        });
    });
</script>

{{ $js ?? null }}

@stack('js')
