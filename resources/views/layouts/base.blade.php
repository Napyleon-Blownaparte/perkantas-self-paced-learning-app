<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PERKANTAS JATIM</title>
        @vite('resources/css/app.css')
        <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body>
        @yield('content')

    </body>
</html>

@yield('script')
