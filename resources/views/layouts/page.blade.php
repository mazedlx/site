<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="mazedlx.net | Webproductions">
        <meta name="author" content="mazedlx.net | Christian Leo-Pernold">
        <title>mazedlx.net webproductions</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script defer src="{{ mix('js/app.js') }}"></script>
    </head>
    <body class="bg-white">
        @yield('content')

        <script @nonce>
            window.locale = "{{ App::getLocale() }}";
        </script>
    </body>
</html>
