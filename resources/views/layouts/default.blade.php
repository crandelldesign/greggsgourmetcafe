<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.nav')
        @include('layouts.header')
        <div class="page">
            <div class="content container-fluid">
                @yield('content')
            </div>
        </div>

        @include('layouts.footer')
        <script type="text/javascript" src="{{ url('/js/default.js') }}"></script>
        @yield('scripts')
    </body>
    
</html>