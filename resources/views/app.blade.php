<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <title>Provincias Argentinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-dark" data-bs-theme="dark">
        <p class="navbar-brand">
            <img src="/argentina.png" alt="Logo" width="45" height="45">
            Sistema de gestion de provincias argentinas
        </p>
    </nav>
    @yield('content')
</body>

</html>
