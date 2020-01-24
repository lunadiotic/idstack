<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="IDStack merupakan situs belajar online mengenai pemrograman Bahasa Indonesia. Kunjungi idstack.net untuk lebih lengkapnya.">
    <meta name="keywords"
        content="html,css,javascript,php,java,nodejs,react,vue,angular,laravel,codeigniter,framework,native,indonesia">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('style')
</head>

<body>
    <div id="app">
        @include('layouts.admin.partials._navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('script')
</body>

</html>
