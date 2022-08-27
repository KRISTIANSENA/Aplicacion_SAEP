@extends('layouts.app')
@section('content')

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>CRM Contacts | UBold - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="styles/style/img/favicon.ico">

    <!-- Bootstrap css -->
    <link href="styles/style/min/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="styles/style/min/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
    <!-- icons -->
    <link href="styles/style/min/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="styles/style/js/head.js"></script>

</head>

<!-- body start -->
<body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

<!-- Begin page -->
<div id="wrapper">




    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="h-100" data-simplebar>

            <!-- User box -->
            <div class="user-box text-center">
                <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                     class="rounded-circle avatar-md">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                       data-bs-toggle="dropdown">Geneva Kennedy</a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user me-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings me-1"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock me-1"></i>
                            <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out me-1"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </div>
                <p class="text-muted">Admin Head</p>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">

                    <li class="menu-title">Menu principal</li>

                    <li>
                        <a href="#sidebarDashboards" data-bs-toggle="collapse">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span class="badge bg-info rounded-pill float-end">4</span>
                            <span> Preguntas frecuentes </span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="index.html">CAPACITACIONES</a>
                                </li>
                                <li>
                                    <a href="dashboard-2.html">CONTACTENOS</a>
                                </li>
                                <li>
                                    <a href="dashboard-3.html">SAEP</a>
                                </li>
                                <li>
                                    <a href="dashboard-4.html">QUIENES SOMOS?</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title mt-2">Menu</li>

                    <li>
                        <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                            <i class="mdi mdi-cart-outline"></i>
                            <span> Administrador </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="ecommerce-dashboard.html">Nuevo usuario</a>
                                </li>
                                <li>
                                    <a href="ecommerce-products.html">lista de usuarios</a>
                                </li>
                                <li>
                                    <a href="ecommerce-product-detail.html">Permisos</a>
                                </li>
                                <li>
                                    <a href="ecommerce-product-detail.html">Rutas</a>
                                </li>
                                <li>
                                    <a href="ecommerce-product-detail.html">Informes</a>
                                </li>
                                <li>
                                    <a href="ecommerce-product-detail.html">PQR</a>
                                </li>
                                <li>
                                    <a href="ecommerce-product-detail.html">Trabajadores</a>
                                </li>
                                <li>
                                    <a href="ecommerce-product-detail.html">Configuracion</a>
                                </li>
                                <li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarTables" data-bs-toggle="collapse">
                            <i class="mdi mdi-table"></i>
                            <span> Almacen </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="tables-basic.html">Nuevo Producto</a>
                                </li>
                                <li>
                                    <a href="tables-datatables.html">Consultar Productos</a>
                                </li>
                                <li>
                                    <a href="tables-editable.html">Remisiones</a>
                                </li>
                                <li>
                                    <a href="tables-editable.html">Ingresos Almacen</a>
                                </li>
                                <li>
                                    <a href="tables-editable.html">Salida Almacen</a>
                                </li>
                                <li>
                                    <a href="tables-editable.html">Informe inventario</a>
                                </li>
                                <li>
                                    <a href="tables-editable.html">Estado entregas</a>
                                </li>
                                <li>
                                    <a href="tables-editable.html">Configuracion Invetario</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarCharts" data-bs-toggle="collapse">
                            <i class="mdi mdi-poll"></i>
                            <span> Ventas </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="charts-apex.html">Nuevo Cliente</a>
                                </li>
                                <li>
                                    <a href="charts-flot.html">Consultar Clientes</a>
                                </li>
                                <li>
                                    <a href="charts-morris.html">Cuentas Por cobrar</a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html">Generar venta</a>
                                </li>
                                <li>
                                    <a href="charts-peity.html">Generar factura</a>
                                </li>
                                <li>
                                    <a href="charts-chartist.html">Pedidos de plataforma</a>
                                </li>
                                <li>
                                    <a href="charts-c3.html">Informes</a>
                                </li>
                                <li>
                                    <a href="charts-sparklines.html">Consultar productos</a>
                                </li>
                                <li>
                                    <a href="charts-knob.html">Consulta de pagos</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarMaps" data-bs-toggle="collapse">
                            <i class="mdi mdi-map-outline"></i>
                            <span> Rutas</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="maps-google.html">Direccion de clientes</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">GPS</a>
                                </li>
                                <li>
                                    <a href="maps-mapael.html">Historial de entregas</a>
                                </li>
                                <li>
                                    <a href="maps-mapael.html">Reporte de novedades</a>
                                </li>
                                <li>
                                    <a href="maps-mapael.html">Imprimir factura</a>
                                </li>
                                <li>
                                    <a href="maps-mapael.html">Confirmar entrega</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#sidebarMaps" data-bs-toggle="collapse">
                            <i class="mdi mdi-map-outline"></i>
                            <span>Compras</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="maps-google.html">Nuevo proveedor</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Consultar proveedores</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                    <li class="breadcrumb-item active">Contacts</li>
                                </ol>
                            </div>
                            <h4 class="page-title"> Lista de empleados</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between mb-2">
                                    <div class="col-auto">
                                        <form>
                                            <div class="mb-2">
                                                <label for="inputPassword2" class="visually-hidden">Buscar</label>
                                                <input type="search" class="form-control" id="inputPassword2" placeholder="Buscar...">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end">
                                            <button  <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                            <a href="{{ route('providers.create') }}" class="btn"><i class="mdi mdi-plus-circle me-1"></i>Crear nuevo Proveedor</a>
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>Id de Proveedor  </th>
                                                <th>Nombre del proveedor</th>
                                                <th>NIT</th>
                                                <th>Tipo de negocio</th>
                                                <th>Teléfono</th>
                                                <th>Dirección</th>
                                                <th>Localidad</th>
                                                <th>Método de transporte</th>
                                                <th>acciones </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($providers as $provider)
                                                <tr>
                                                    <td>{{$provider->id}}</td>
                                                    <td>{{$provider->provider_name}}</td>
                                                    <td>{{$provider->nit}}</td>
                                                    <td>{{$provider->business_type}}</td>
                                                    <td>{{$provider->telephone}}</td>
                                                    <td>{{$provider->address}}</td>
                                                    <td>{{$provider->place}}</td>
                                                    <td>{{$provider->metod_conveyance}}</td>
                                                    <td>
                                                        <form action="{{route('providers.destroy',$provider->id)}}" method="post" >
                                                            @csrf
                                                            <a href="{{route('providers.edit', $provider->id)}}">
                                                                <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>

                                                            <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                                                                @method('DELETE')
                                                            </button>
                                                            <a href="{{route('providers.show', $provider->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>

                                                            </button>
                                                        </form>


                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                        </div> <!-- end card-->
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="">Coderthemes</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Modal -->
<div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Add Contacts</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="position" placeholder="Enter phone number">
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Location</label>
                        <input type="text" class="form-control" id="company" placeholder="Enter location">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Vendor js -->
<script src="styles/style/min/vendor.min.js"></script>

<!-- App js -->
<script src="styles/style/min/app.min.js"></script>

</body>
</html>


@endsection('content')
