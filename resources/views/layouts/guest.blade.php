
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="styles/style/img/favicon.ico">

    <!-- Bootstrap css -->
    <link href="styles/style/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="styles/style/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
    <!-- icons -->
    <link href="styles/style/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="styles/style/js/head.js"></script>

</head>

<body class="auth-fluid-pages pb-0">

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
                                        <img src="styles/style/img/logo1.jpg" alt="150" height="150">
                                    </span>
                        </a>

                    </div>
                </div>

                <!-- title-->
          <h4 class="text-center"> Iniciar sesion</h4>
                <p class="text-center">Ingresa tu correo electronico y contraseña para acceder a tu cuenta.</p>

                <!-- form -->
                <form action="{{ route('login') }}" method="post">
                    @csrf
                <form action="#">
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Correo electronico</label>
                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Ingresa tu correo">
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('login') }}" class="text-muted float-end"><small>Olvidaste la contraseña?</small></a>
                        <label for="password" class="form-label">Contraseña</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" placeholder="Ingresa tu contraseña">
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">Recordarme</label>
                        </div>
                    </div>
                    <div class="text-center d-grid">
                        <button class="btn btn-primary" type="submit">Iniciar sesion </button>
                    </div>
                    <!-- social-->

                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p><strong>Distribuidora Practipasta JJ SAS</strong><br>
                        Cra 84 No 7d 49 Valladolid  <br>
                        Bogota / Colombia</p>
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
            <p class="lead"><i class="mdi mdi-format-quote-open"></i>   La buena comida y una cocina que sea calida, permiten que una casa sea verdaderamente un hogar.  <i class="mdi mdi-format-quote-close"></i>
            </p>
            <h5 class="text-white">
                - By (Richael Ray)
            </h5>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->

<!-- Vendor js -->
<script src="styles/style/js/vendor.min.js"></script>

<!-- App js -->
<script src="styles/style/js/app.min.js"></script>

</body>
</html>
