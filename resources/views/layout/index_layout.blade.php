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
    <title>@yield('title')</title>

</head>

<body>
    @yield('header')

    @yield('main')

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container footer-container">
            <!-- Logo -->
            <div>
                <object data="{{ asset('sources/images/logo.svg') }}" type="image/svg+xml" id="logo">
                    <img src="{{ asset('sources/images/logo.png') }}" alt="Logo Diario El Faro" />
                </object>
            </div>

            <!-- Sección Sobre Nosotros -->
            <div class="footer-about-us ">
                <h2>Sobre Nosotros</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa illum quis omnis minima doloribus ea obcaecati
                    fugit.</p>
            </div>


            <!-- Iconos Redes Sociales -->
            <div class="footer-container-icons">
                <h2>Siguenos</h2>
                <nav class="footer-social-icons">
                    <a href="#"><object class="social-icon" data="{{ asset('sources/images/instagram_f_icon-icons.com_65485.svg')}}" type="image/svg+xml"></object></a>
                    <a href="#"><object class="social-icon" data="{{ asset('sources/images/TWITTER_icon-icons.com_65486.svg')}}" type="image/svg+xml"></object></a>
                    <a href="#"><object class="social-icon" data="{{ asset('sources/images/FB_icon-icons.com_65484.svg')}}" type="image/svg+xml"></object></a>
                    <a href="#"><object class="social-icon" data="{{ asset('sources/images/YOUTUBE_icon-icons.com_65487.svg')}}" type="image/svg+xml"></object></a>
                </nav>
            </div>
            <!-- Sección Desarrollado por -->
            <div class="footer-info">
                <p><small>Desarrollado por <i>Lennys G. - Iris A. - Samuel P.</i> / <b>Con fines educativos</b> </small></p>
            </div>
    </footer>

</body>


<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


</html>