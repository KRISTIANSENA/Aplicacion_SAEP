<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Menu</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="estructura">
    <header>
        <img class="logo" src="img/saep.jpg" width="1 px" height="5 px" alt="logotipo">
    </header>

    <div class="iconos">

        <a href="products/create" target="_blank"><img src="img/maprute.png" alt="Bodega" width="110 px"><p><h2>GPS</h2></p></a>
        <a href="products/listproducts" target="_blank"><img src="img/rutaver.png" alt="Ventas" width="110 px"><p><h2>Ver ruta</h2></p></a>
        <a href="products" target="_blank"><img src="img/advertencia.png" alt="Almacen" width="110 px"><p><h2>Reportar novedad</h2></p></a>
        <a href="profile" target="_blank"><img src="img/entrega.png" alt="administrador" width="110 px"><p><h2>Confirmar entrega</h2></p></a>
        <a href="dashboard" target="_blank"><img src="img/menu1.png" alt="diot" width="110 px"><p><h2>Menu</h2></p></a>
    </div>
    @include('layouts.components.footer')
</div>
</body>
</html>
