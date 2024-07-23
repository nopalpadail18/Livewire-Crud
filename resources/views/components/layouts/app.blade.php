<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <div class="container mx-auto">
            {{ $slot }}
        </div>
    </body>
</html>
