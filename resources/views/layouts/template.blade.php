<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>My Blog</title>
</head>
<body class="bg-kight">

    <nav class="navbar bg-dark border-bottom border-body text-light" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand">Navbar</a>

            <div class="d-flex align-items-center">
                {{ session('username') }}

                <a href="{{ route('auth.logout') }}" class="btn btn-light px-3 ms-3">
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="mt-4">
        @yield('content')
    </div>
    
    
    {{-- Boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>