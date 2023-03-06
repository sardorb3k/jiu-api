<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" className="h-full dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Japanese International University (JIU) - Yapon standartlariga asoslangan xalqaro universitet. Qo'ng'iroq qiling, to'liq ma'lumot oling: +998 (71) 203-02-20" />
    <meta name="keywords"
        content="university, universitet, institut, japan, yaponiya, japanese, international, xalqaro, o'qish, diplom, business, biznes, accounting, finance, buxgalteriya, moliya, pedagogika, turizm, tourism, it, dasturlash, programming, teaching, best, top" />
    <meta property="og:url" content="jiuuni.uz" />
    <meta property="og:title" content="Japanese International University (JIU)" />
    <meta property="og:description"
        content="Japanese International University (JIU) - Yapon standartlariga asoslangan xalqaro universitet. Qo'ng'iroq qiling, to'liq ma'lumot oling: +998 (71) 203-02-20" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="jiuuni.uz">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    @vite('resources/css/app.css')

    <link rel="stylesheet" type="text/css" href="/build/assets/app-b73a2d49.css">
    {{-- <script src="/build/assets/app-2dec4663.js"></script> --}}
    <!-- Title -->
    <title>@yield('title')</title>
</head>

<body class="items-center bg-white-100  dark:bg-slate-900 ">

    @yield('content')
    @vite('resources/js/app.js')

    {{-- <script src="/build/assets/app-2dec4663.js"></script>
    <script src="/build/assets/preline-709aecb3.js"></script> --}}

</body>

</html>
