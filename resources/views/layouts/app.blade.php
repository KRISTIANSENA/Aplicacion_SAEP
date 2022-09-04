<!DOCTYPE html>
<html lang="es">
@extends('layouts.components.head')
<!-- body start -->
<body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

 <!-- Begin page -->
<div id="wrapper">
@extends('layouts.components.navbar')
@extends('layouts.components.sidebar')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
@extends('layouts.components.'content')
</div>

<div>@yield('content')</div>
<!-- END wrapper -->

<div>@extends('layouts.components.footer')</div>
@extends('layouts.components.scrip')
</body>
</html>
