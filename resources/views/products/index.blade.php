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

        <a href="products/create" target="_blank"><img src="img/nuevoprducto.png" alt="Bodega" width="110 px"><p><h2>Nuevo producto</h2></p></a>
        <a href="products/listproducts" target="_blank"><img src="img/listproduct.png" alt="Ventas" width="110 px"><p><h2>Productos</h2></p></a>
        <a href="products" target="_blank"><img src="img/introalmacen.png" alt="Almacen" width="110 px"><p><h2>Ingreso Almacen</h2></p></a>
        <a href="profile" target="_blank"><img src="img/saldomic.png" alt="administrador" width="110 px"><p><h2>Salida por ruta</h2></p></a>
        <a href="customers" target="_blank"><img src="img/salclie.png" alt="Clientes" width="110 px"><p><h2>Salida por cliente</h2></p></a>
        <a href="providers" target="_blank"><img src="img/devpro.png" alt="diot" width="110 px"><p><h2>Devoluciones</h2></p></a>
        <a href="providers" target="_blank"><img src="img/stock.png" alt="diot" width="190 px"><p><h2>Total stock</h2></p></a>
        <a href="dashboard" target="_blank"><img src="img/menu1.png" alt="diot" width="110 px"><p><h2>Menu</h2></p></a>
    </div>
    @include('layouts.components.footer')
</div>
</body>
</html>
