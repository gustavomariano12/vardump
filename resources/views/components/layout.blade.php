<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>ETEC - @yield('titulo')</title>
    </head>
    <body class="antialiased">
        @include("components.header")
        @yield('conteudo')
        @include("components.footer")
    </body>
</html>