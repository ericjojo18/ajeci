<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} " class="dark">
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
        

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @stack('modals')
        <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/inline/ckeditor.js"></script>
        @livewireScripts
        @yield('scripts')
    </body>
</html>
