<!DOCTYPE html>
<html lang="en">
    <head>
        @include('core::layouts.partials.head')
    </head>
    <body>
        @include('core::layouts.partials.header')

        <main class="main">
            @yield('content')
        </main>

        @include('core::layouts.partials.script')
    </body>
</html>
