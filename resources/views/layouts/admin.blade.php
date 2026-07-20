<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juru Giling</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    @include('partials.navbar')

    @include('partials.sidebar')

    <main class="app-main">
        <div class="app-content p-3">

            @yield('content')

        </div>
    </main>

    @include('partials.footer')

</body>
</html>