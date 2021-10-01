<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/logo.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicons/logo.png">
  <link rel="mask-icon" href="../assets/images/favicons/logo.png" color="#5bbad5">
  <meta name="msapplication-TileImage" content="../assets/images/favicons/logo.png">

        <title>{{ config('app.name', 'AJECI') }}</title>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
    <script src="ckeditor/ckeditor.js"></script>
        
</html>
