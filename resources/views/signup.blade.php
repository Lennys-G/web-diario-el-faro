@extends('layout.index_layout')

@section('title')
@yield('sub_title')
@endsection

@section('main')
<!-- Logo top -->
<div class="center-flex col-md-12 d-block d-md-none d-lg-none d-xl-none">
    <object data="sources/images/logo.svg" type="image/svg+xml" id="logo" class="img-fluid w-auto align-items-center mt-5" style=" height: 200px;">
        <img src="sources/images/logo.png" alt="Logo Diario El Faro" class="img-fluid w-auto align-items-center" style=" height: 200px;" " />
        </object>
    </div>

<!-- Container form -->
<div class=" container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0card" style="border-radius: 1rem;">
                        <!-- Image-->
                        <div class="col-md-6 col-lg-5 d-none d-md-block align-content-center ">
                            <a href="/"><img src="sources/images/logo.svg" alt="login form" class="img-fluid w-auto align-items-center" style="height: 200px;" /></a>
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <!-- Form -->
                                <form action="{{ route('signup') }}" method="POST">
                                    @csrf
                                    <!-- Input: name -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="name">Nombre</label>
                                        <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Nombre" value="{{ old('name') }}" />
                                        <!-- Error: name -->
                                        @error('name')
                                        <p class="alert alert-danger p-1 mt-2 ">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Input: email -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="email">Correo electrónico</label>
                                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Correo" value="{{ old('email') }}" />
                                        @error('email')
                                        <p class="alert alert-danger p-1 mt-2 ">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Input: password -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="password">Contraseña</label>
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Contraseña" />
                                        @error('password')
                                        <p class=" alert alert-danger p-1 mt-2 ">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Input: repit password -->
                                    <div data-mdb-input-init class=" form-outline mb-4">
                                        <label class="form-label" for="password_confirmation">Repetir Contraseña</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg" placeholder="Repetir Contraseña" />
                                        @error('password_confirmation')
                                        <p class="alert alert-danger p-1 mt-2 ">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Checkbox subscription -->
                                    <div class="form-check mb-2 ">
                                        <input class="form-check-input" type="checkbox" name="subscription" value="1" id="checkSubscription">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Suscribirse al NewsLetter
                                        </label>
                                    </div>
                                    <!-- Button: submit -->
                                    <div class="pt-1 mb-4">
                                        <input data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit" value="Crear Cuenta"></input>
                                    </div>

                                    <!-- Redirection login -->
                                    <a class=" small text-muted mb-4 d-block " href="{{ route('login') }}">Iniciar Sesión</a>
                                    <!-- Redirection home -->
                                    <a class="small text-muted d-block" href="/">Página principal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection
