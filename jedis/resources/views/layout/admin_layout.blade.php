@if (Session::get('admin'))
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('header')
    </head>
    <body>
        @yield('body')
        <script src="/assets/js/jquery.js"></script>
        @yield('script')
    </body>
    </html>
@else
    <script> window.location.href="/"; </script>
@endif