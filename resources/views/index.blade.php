@extends('layout.index_layout')

<!-- Title   -->
@section('title', 'Diario El Faro')
<!-- Header -->
@section('header')
<header>
    <div class="container">
        <div id="currentDate" class="currentDate"></div>
        <!-- Logo -->
        <div class="center-flex">
            <object data="{{ asset('sources/images/logo.svg') }}" type="image/svg+xml" id="logo">
                <img src="{{ asset('sources/images/logo.png') }}" alt="Logo Diario El Faro" />
            </object>
        </div>

        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg">
            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler d-lg-none" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon  "></span>
            </button>
            <div id="navbarNav" class="collapse navbar-collapse">
                <ul class="navbar-nav">

                    <li class="nav-item active ">
                        <a href="/" class="nav-link ">
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item active ">
                        <a href="{{ route('articles.category', ['category' => 'negocios']) }}" class="nav-link ">
                            Negocios
                        </a>
                    </li>
                    <li class="nav-item active ">
                        <a href="{{ route('articles.category', ['category' => 'deportes']) }}" class="nav-link ">
                            Deportes
                        </a>
                    </li>
                    <li class="nav-item active ">
                        <a href="{{ route('articles.category', ['category' => 'ciencia']) }}" class="nav-link ">
                            Ciencia
                        </a>
                    </li>
                    <li class="nav-item active ">
                        <a href="{{ route('articles.category', ['category' => 'salud']) }}" class="nav-link ">
                            Salud
                        </a>
                    </li>
                    <li class="nav-item active ">
                        <a href="{{ route('articles.category', ['category' => 'entretenimiento']) }}" class="nav-link ">
                            Entretenimiento
                        </a>
                    </li>
                </ul>

                <div>
                    <!-- Button dashboard -->
                    <a href="{{ route('articles') }}" class="btn btn-dark">
                        Administrar
                    </a>

                    <!-- Button login -->
                    <a href="{{ route('login') }}" type="button" class="btn btn-dark">
                        Iniciar sesión
                    </a>

                </div>

            </div><!-- End navbar -->

            <div class="center-flex search-bar">
                <input type="text" name="search" id="">
                <button type="submit"><object data="{{ asset('sources/images/icon-search.svg') }}" type="image/svg+xml"></object></button>
            </div>
        </nav>
    </div>
</header>
@endsection

<!-- Main -->
@section('main')
<main class="container">
    <div class="row">
        <!-- News: General -->
        <section id="generalNews" class="col-lg-8">
            <div class="row align-text-bottom mt-3  ">
                <h5 class="col-4 col-md-2">Actualidad</h5>
                <a href="#" class="col-8">Ver más</a>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div id="container-carousel" class="carousel-inner">
                        <!-- insert news here-->
                        @foreach ($articlesCurrents as $article)
                        <div class="carousel-item active">
                            <img src="{{$article['urlToImage']}}" class="d-block w-100" alt="{{$article['title']}}">
                            <div class="carousel-caption d-md-block">
                                <h5>{{$article['title']}}</h5>
                                <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        </section>

        <!-- News: Sports -->
        <section id="businessNews" class=" col-lg-4 mt-3">
            <div class="row align-text-bottom ">
                <h5 class="col-4 ">Negocios</h5>
                <a href="#" class="col-8 ">Ver más</a>
            </div>
            <!-- Insert news -->
            @php
            $counter = 0;
            @endphp


            @foreach ($articlesBusiness as $article)
            @if ($counter < 4) <div class="card mt-2">
                <div class="row">
                    <div class="col-md-5">
                        <img class="d-block w-100 h-100" src="{{$article['urlToImage']}}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="card-block">
                            <h4 class="card-title">{{$article['title']}}</h4>
                            <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                        </div>
                    </div>
                </div>
    </div>
    <?php $counter++; // Increment counter inside the loop
    ?>
    @endif
    @endforeach
    </section>
    </div>

    <hr> <!-- dividing line -->

    <section id="advertisements" class="row justify-content-between">
        <div class="row align-text-bottom ">
            <h5 class="col-4 col-sm-2 ">Anuncios</h5>
            <a href="#" class="col-8 ">Ver más</a>
        </div>
        @foreach ($articlesAdvertisements as $article)
        <div class="card cardArticle col-md-3 col-sm-4">
            <img src="{{$article['urlToImage']}}" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$article['title']}}</h4>
                <div class="footerCard">
                    <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <hr>
    <section id="sportsNews" class="row justify-content-between">
        <div class="row align-text-bottom ">
            <h5 class="col-4 col-md-2">Deportes</h5>
            <a href="#" class="col-8">Ver más</a>
        </div>
        @foreach ($articlesSports as $article)
        <div class="card cardArticle col-md-3 col-sm-4">
            <img src="{{$article['urlToImage']}}" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$article['title']}}</h4>
                <div class="footerCard">
                    <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <hr>
    <section id="scienceNews" class="row justify-content-between">
        <div class="row align-text-bottom ">
            <h5 class="col-4 col-sm-2 ">Ciencias</h5>
            <a href="#" class="col-8 ">Ver más</a>
        </div>
        @foreach ($articlesScience as $article)
        <div class="card cardArticle col-md-3 col-sm-4">
            <img src="{{$article['urlToImage']}}" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$article['title']}}</h4>
                <div class="footerCard">
                    <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <hr>
    <section id="healthNews" class="row justify-content-between">
        <div class="row align-text-bottom ">
            <h5 class="col-4 col-sm-2">Salud</h5>
            <a href="#" class="col-8 ">Ver más</a>
        </div>
        @foreach ($articlesHealth as $article)
        <div class="card cardArticle col-md-3 col-sm-4">
            <img src="{{$article['urlToImage']}}" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$article['title']}}</h4>
                <div class="footerCard">
                    <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <hr>
    <section id="entertainmentNews" class="row justify-content-between">
        <div class="row align-text-bottom ">
            <h5 class="col-12 col-sm-3 col-lg-2">Entretenimiento</h5>
            <a href="#" class="col-5 ">Ver más</a>
        </div>
        @foreach ($articlesEntertainment as $article)
        <div class="card cardArticle col-md-3 col-sm-4">
            <img src="{{$article['urlToImage']}}" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$article['title']}}</h4>
                <div class="footerCard">
                    <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach

    </section>
    <hr>
    <div>
        <h5>Contactanos</h5>
        <form action="/articles" method="POST" class="bg-light p-4 formContact mb-5 ">
            @csrf
            <div class="form-row row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Correo</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Asunto</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Asunto">
            </div>

            <div class="form-row">
                <label>Comentarios</label>
                <textarea class="form-control min-height-100" id="validationTextarea" placeholder="Mensaje" required></textarea>
            </div>
            <button type="button" id="submitContactBtn" class="btn btn-primary mt-2">Enviar</button>
        </form>
    </div>
</main>
@endsection

<script src="{{ asset('js/index.js') }}" defer></script>