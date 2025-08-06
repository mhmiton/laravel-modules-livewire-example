<!DOCTYPE html>
<html lang="en">
    <head>
        @include('core::components.layouts.partials.head')
    </head>
    <body>
        @include('core::components.layouts.partials.header')

        <main class="main">
            {{ $slot }}
        </main>

        @include('core::components.layouts.partials.script')
    </body>
</html>
