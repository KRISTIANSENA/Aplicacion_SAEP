@extends('layouts.guest')
@section('content')


<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="p-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <div class="auth-logo">
                        <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="styles/style/img/logo1.jpg" alt="" height="120">
                                    </span>
                        </a>

                        <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="styles/style/img/fondo.jpg" alt="" height="22">
                                    </span>
                        </a>
                    </div>
                </div>

                <!-- title-->
                <h4 class="mt-0">DISTRIBUIDORA PRACTIPASTA JJ SAS</h4>
                <p class="text-muted mb-8">Ingresa tu informacion.</p>

                <!-- form -->

                    <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input class="form-control" id="email" type="email" name="email" required placeholder="Ingresa tu email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <div class="input-group input-group-merge">
                            <input id="password" type="password" name="password" class="form-control" placeholder="Enter your password">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">Recordarme</label>
                        </div>
                    </div>
                    <div class="text-center d-grid">
                        <button class="btn btn-primary" type="submit">Iniciar </button>
                    </div>
                    <!-- social-->
                    <!-- <div class="text-center mt-4">
                        <p class="text-muted font-16">Iniciar con</p>
                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>
                    </div>-->
                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted"> <a href="" class="text-muted float-end">
                            <small>Olvidaste la contraseña?</small></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3 text-white">Sirviendo con gratitud!</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i>bienaventurados los que no vieron, y creyeron.  <i class="mdi mdi-format-quote-close"></i>
            </p>
            <h5 class="text-white">
                (Juan 20:28)
            </h5>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->

@endsection
