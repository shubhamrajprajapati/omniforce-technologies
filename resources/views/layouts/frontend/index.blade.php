<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>

    <meta name="title" content="@yield('title')">
    <meta name="description" content="@yield('description')">

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="https://omniforcetechnologies.com/" />
    <meta property="og:site_name" content="omniforcetechnologies.com" />
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="website">

    <meta name="author" content="https://omniforcetechnologies.com/ ">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="title" content="@yield('title')" />
    <meta name="url" content="https://omniforcetechnologies.com/" />

    <meta name="msnbot" content=" Index, Follow " />
    <meta name="googlebot" content="index, follow" />
    <meta name="yahooseeker" content="Index, Follow" />
    <meta name="robots" content="Index, Follow" />
    <meta name="Language" content="en-us" />
    <meta name="document-type" content="Public" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="@yield('title') : @yield('description')" />

    <link href="https://omniforcetechnologies.com/" rel="publisher">
    <link rel="canonical" href="https://omniforcetechnologies.com/">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo-transparent.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo-transparent.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo-transparent.png') }}">
    <link rel="icon" href="/assets/img/icon-top.png">

    {{-- For Font, Icons, dark mode switcher, Css & Js --}}
    @include('layouts.common.header')
</head>

<body class="dark:bg-slate-700 dark:text-white font-[Poppins] antialiased scroll-smooth [-webkit-tap-highlight-color:transparent]">

    @include('frontend.includes.header.index')

    @yield('content')

    @include('frontend.partials.footer.index')

    @stack('script')
</body>

</html>
