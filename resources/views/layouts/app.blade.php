<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Accounting</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Accounting</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Banks</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Branches<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>


        @yield('content')


        <footer class="text-center bg-dark p-3">
            <p class="text-primary">Accounting &reg; {{ now()->year }} Created by &copy; <span class="text-danger">Chameera</span></p>
        </footer>
    </body>
</html>