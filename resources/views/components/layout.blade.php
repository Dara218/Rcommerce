<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gotcha</title>
        <link rel="stylesheet" href="rc.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>


    </head>

    <body class="position-relative">
        {{ $slot }}
    </body>

    <footer class="bg-dark text-white w-100 text-center position-absolute bottom-0 start-0" style="width: 100%; height: 30px">
        <p>&copy;Gotcha, all right reserved. {{ today()->format('Y') }}</p>
    </footer>

</html>
