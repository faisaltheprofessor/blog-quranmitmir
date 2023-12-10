<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta property="og:title" content="Quran mit mir">
    <meta property="og:description" content="Entdecke göttliche Weisheit und engagiere dich in aufschlussreichen Diskussionen">
    <meta property="og:image" content="http://quranmitmir.de/storage/7/quran.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js'
    ])
    @stack('inline-scripts')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@700&display=swap');

        .card-body h1 {
            font-family: 'Roboto', sans-serif;
        }

        .post-content p {
            font-family:  'Open Sans', sans-serif;
            font-size: 12px;
        }
    </style>
</head>

<body class="d-flex flex-column vh-100">
    @include('shared/navbar')

    <div class="container flex-grow-1">
        @include('shared/alerts')

        <main class="my-4">
            @yield('content')
        </main>
    </div>

    @include('shared/footer')
</body>
</html>
