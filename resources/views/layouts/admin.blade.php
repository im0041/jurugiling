<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Juru Giling')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.navbar')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                @include('partials.sidebar')
            </div>

            <div class="col-md-10 p-4">
                @yield('content')
            </div>

        </div>
    </div>

    @include('partials.footer')

</body>
</html>