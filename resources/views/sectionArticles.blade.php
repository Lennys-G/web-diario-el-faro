@extends('layout.index_layout')

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
<section id="businessNews" class="container mt-3">
    <div class="row align-text-bottom">
        <h5 class="col-4 text-uppercase">{{$category}}</h5>
    </div>

    <div class="row justify-content-center">
        @foreach ($articles as $article)
        <div class="card cardArticle col-lg-3 col-md-4 col-sm-12 m-4">
            <img src="{{$article['urlToImage']}}" alt="..." class="my" style=" max-width: 100%; max-height: 100%; height: 200px; width: 800px;">
            <div class="card-body">
                <h4 class="card-title">{{$article['title']}}</h4>
                <div class="footerCard">
                    <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection