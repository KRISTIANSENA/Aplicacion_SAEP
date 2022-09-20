@extends('layouts.guest')
@section('content')

<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-150">
            <div class="p-3">

                <!-- Logo -->
                    <div class="auth-logo">
                        <a href="" class="logo logo-dark text-center">
                                    <span>
                                        <img class="center-block" src="img/logo1.jpg" alt="150" height="150">
                                    </span>
                        </a>
                    </div>

                <!-- Titulo-->
                <h4 class="text-center"> Iniciar sesion</h4>
                <p class="text-center">Ingresa tu correo electronico y contraseña para acceder a tu cuenta.</p>

                    <!-- Formato -->

                    <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input class="form-control" id="email" type="email" name="email" required placeholder="Ingresa tu email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <div class="input-group input-group-merge">
                            <input id="password" type="password" name="password" class="form-control" placeholder="Ingresa tu contraseña">
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">Recordarme</label>
                            <a href="{{ route('login') }}" class="text-muted float-end"><small>Olvidaste la contraseña?</small></a>
                        </div>
                    </div>
                    <div class="text-center d-grid">
                        <button class="btn btn-danger" type="submit">Iniciar sesion </button>
                    </div>
                    <!-- social-->

                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p><span>&copy; copy All right reserved SAEP Grup</span></p>

                </footer>

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3 text-white">Sirviendo con dedicación!</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i>
             La buena comida y una cocina que sea calida, permiten que una casa sea verdaderamente un hogar.
             <i class="mdi mdi-format-quote-close"></i>
            </p>
            <h5 class="text-white">
                - Por (SAEP)
            </h5>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->
@endsection
