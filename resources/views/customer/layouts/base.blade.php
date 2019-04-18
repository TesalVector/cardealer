<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('global.head')
    </head>
    <body>
        @include('customer.include.header')
            @yield('body')
        @include('customer.include.footer')
    </body>
</html>