<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('storage/images/iconos/favicon.ico') }}" type="image/x-icon"/>
    <title>@yield('title', 'Impacta')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="layout__footer text-center text-lg-start">
            @include('partials.footer')
        </footer>
    </div>
</body>
</html>