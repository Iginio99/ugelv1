<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-gray-900 antialiased">
        <h1>Términos y Condiciones</h1>

        <h2>Introducción</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed mattis dui. Vestibulum imperdiet gravida lorem, in suscipit ligula. Nullam sed ex vel lacus aliquet feugiat id a sem.</p>
      
        <h2>Sección 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed mattis dui. Vestibulum imperdiet gravida lorem, in suscipit ligula. Nullam sed ex vel lacus aliquet feugiat id a sem.</p>
      
        <h2>Sección 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed mattis dui. Vestibulum imperdiet gravida lorem, in suscipit ligula. Nullam sed ex vel lacus aliquet feugiat id a sem.</p>
      
        <h2>Sección 3</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed mattis dui. Vestibulum imperdiet gravida lorem, in suscipit ligula. Nullam sed ex vel lacus aliquet feugiat id a sem.</p>
      
        <h2>Conclusión</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed mattis dui. Vestibulum imperdiet gravida lorem, in suscipit ligula. Nullam sed ex vel lacus aliquet feugiat id a sem.</p>
    </body>
</html>