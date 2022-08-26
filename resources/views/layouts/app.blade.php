<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- App favicon -->
    <link rel="shortcut icon" href="style/img/favicon.ico">
    <!-- Bootstrap css -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="style/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
    <!-- icons -->
    <link href="style/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="style/js/head.js"></script>

    <title>@yield('title')</title>
</head>


@yield('content')




<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('.collapsible').collapsible();
    });
    $(document).ready(function(){
        $('select').formSelect();
    });
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });

 $(document).ready(function(){
    $('.tap-target').tapTarget();
  })

  $('.dropdown-trigger').dropdown();
</script>
</body>
</html>
