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

        <!-- Css -->
        <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/socmed.css') }}">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            {{-- Navbar --}}
            @include('layouts.navigation')

            {{-- Page Heading --}}
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            {{-- Page Content --}}
            <main>
                {{ $slot }}
            </main>
            <x-social-media :links="[
                ['url' => 'https://facebook.com', 'icon' => '/images/facebook.png', 'name' => 'Facebook'],
                ['url' => 'https://instagram.com', 'icon' => '/images/social.png', 'name' => 'Instagram'],
                ['url' => 'https://twitter.com', 'icon' => '/images/youtube.png', 'name' => 'Twitter']
            ]" />
            {{-- Footer --}}
            @include('layouts.footer')
        </div>
    </body>
</html>