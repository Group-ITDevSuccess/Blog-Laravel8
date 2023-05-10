<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-2aYgNVv7UfcJKXUzmfx6hDnWU1v7xu86Gwp5V27Zl8zv7lku9r3qKpF1yW8+l0cUeKx2xRktzmKtcav0/91c/g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-Q1xAdnXTfFbn1T/KTtB9ETQnRzdRZiW8EjKtJ4KNM17sOs1wO/Jb+dTkljH9mQ2RgOEny97B8CjJl4lq3p4w4g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script> --}}

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
