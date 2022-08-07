<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'NFT fantasia') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    </head>
    <body class="font-sans antialiased" style="background-color: #808070">
        <div class="min-h-screen ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow" style="background-color: #58535396">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                @if( Session::has( 'success' ))
                {{ Session::get( 'success' ) }}
            @elseif( Session::has( 'error' ))
                {{ Session::get( 'error' ) }} <!-- here to 'withWarning()' -->
            @endif
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
