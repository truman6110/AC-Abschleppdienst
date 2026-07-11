<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>AC-Abschleppdienst</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-white text-gray-800">

    @include('partials.header')

    <main>

        @yield('content')

    </main>

    @include('partials.footer')

</body>

</html>