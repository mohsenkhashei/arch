<!doctype html>
<html>
    <head>
        @include('layout.head')
    </head>
    <body>
        @include('layout.navbar')
        <div class="container">
                @yield('content')
        </div>
    
        @include('layout.footer')
    </body>
</html>
