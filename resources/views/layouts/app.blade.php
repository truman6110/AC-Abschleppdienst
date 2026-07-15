<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>

        @yield('title','AC-Abschleppdienst | Premium Anhänger in Deutschland')

    </title>

    <meta
        name="description"
        content="@yield('description','Premium Anhänger für Privatpersonen und Unternehmen. Hochwertige Qualität, faire Preise und schnelle Lieferung in ganz Deutschland.')">

    <meta
        name="keywords"
        content="Anhänger, PKW Anhänger, Autoanhänger, Kipper, Kofferanhänger, Autotransporter, Deutschland">

    <meta
        name="author"
        content="AC-Abschleppdienst">

    <meta
        name="robots"
        content="index, follow">

    <link
        rel="canonical"
        href="{{ url()->current() }}">

    {{-- Open Graph --}}

    <meta property="og:type" content="website">

    <meta
        property="og:title"
        content="@yield('title','AC-Abschleppdienst')">

    <meta
        property="og:description"
        content="@yield('description','Premium Anhänger in Deutschland')">

    <meta
        property="og:url"
        content="{{ url()->current() }}">

    <meta
        property="og:image"
        content="{{ asset('images/hero/hero-main.jpg') }}">

    {{-- Twitter --}}

    <meta
        name="twitter:card"
        content="summary_large_image">

    <meta
        name="twitter:title"
        content="@yield('title','AC-Abschleppdienst')">

    <meta
        name="twitter:description"
        content="@yield('description','Premium Anhänger in Deutschland')">

    <meta
        name="twitter:image"
        content="{{ asset('images/hero/hero-main.jpg') }}">

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-white text-gray-800 antialiased">

    @include('partials.header')

    <main>

        @yield('content')

    </main>

    @include('partials.footer')

</body>

</html>