<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | AC-Abschleppdienst</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    @include('admin.partials.sidebar')

    <div class="flex-1 flex flex-col">

        @include('admin.partials.navbar')

        <main class="p-8">

            @yield('content')

        </main>

    </div>

</div>

</body>

</html>