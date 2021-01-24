<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        {{-- Styles --}}
        @include('partials.styles')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
    </head>
    <body>
        <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
        <!--Loader-->
        <div class="loader">
            <div class="bouncybox">
                <div class="bouncy"></div>
            </div>
        </div>
        @auth
            <div class="text-center bg-light">
                <a href="{{route('admin.home')}}"><i class="fa fa-pencil-square"></i> Back to dashboard!</a>
            </div>
        @endauth
        {{-- topbar --}}
        @include('components.topbar')

        {{-- header --}}
        @include('components.header')

        <!--Search-->
        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="Search here...."  required/>
                <button type="submit" class="btn btn_common blue">Search</button>
            </form>
        </div>

        {{-- content --}}
        @yield('content')

        {{-- Footer --}}
        @include('components.footer')
        
        {{-- Scripts --}}
        @include('partials.scripts')
        @livewireScripts
    </body>
</html>
