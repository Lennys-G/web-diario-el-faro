<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Roboto - Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <!-- styles css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Panel de administrador</title>

</head>

<body class="d-flex">
    <header class="bg-transparent col-2">
        <!-- Sidenav -->
        <nav id="sidenav" class="sidena min-vh-100" style="background-color: #eeeeee">
            <a href="/">
                <img src="sources/images/logo.svg" alt="login form" class="img-fluid w-auto align-items-center my-4 " style="height: 75px;" />
            </a>

            <ul class="sidenav-menu">
                <!-- Link artiles -->
                <div class="sidenav-item">
                    <a href="{{ route('articles') }}" class="sidenav-link"><i class="fas fa-cogs fa-fw me-3"></i><span>Artículos</span></a>
                </div>

                <!-- Link users -->
                <div class="sidenav-item">
                    <a class="sidenav-link" href="{{ route('users') }}">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Usuarios</span></a>
                </div>

                <!-- Link logout -->
                <div class="sidenav-item">
                    <a class="sidenav-link" href="/"><i class="fas fa-cogs fa-fw me-3"></i><span>Cerrar Sesión</span></a>
                </div>

            </ul>
        </nav>
    </header>

    <main class="col-10">
        <div class="container my-5">
            @yield('main')
        </div>
    </main>

</body>
<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


</html>