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
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form2Example17">Correo electrónico</label>
                                        <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form2Example27">Contraseña</label>
                                        <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <input data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit" value="Iniciar Sesión"></input>
                                    </div>

                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes una cuenta? <a href="{{ route('signup') }}" style="color: #393f81;">Registrate aquí</>
                                    </p>
                                    <a class="small text-muted" href="/">Página principal</a>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection
