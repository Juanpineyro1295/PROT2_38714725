<!DOCTYPE html>
<html>
<head>
    <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/css/estilotarjetas2.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/755ec9a4a7.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>



<nav>
  
    <ul class="nav nav-tabs" style="background-color: #454545">
  <li class="nav-item" >
    <a class="nav-link active" aria-current="page" href="/CI_proyecto_pineyro_23/" style="color:#F6F1E9; font-size: x-large; background-color: #454545">Vista Pública</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"style="color: #F6F1E9; font-size: x-large; ">Usuarios</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="<?php echo base_url ('/usuario_a') ?>"style=" font-size: x-large; ">Listar Usuarios</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="<?php echo site_url('/usuario_a/registrar') ?>"style=" font-size: x-large; ">Crear Usuario Administrador</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"style="color: #F6F1E9; font-size: x-large; ">Productos</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="<?php echo base_url ('/products') ?>"style=" font-size: x-large; ">Listar Productos</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="<?php echo site_url('/products/create') ?>"style=" font-size: x-large; ">Crear Producto</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"style="color: #F6F1E9; font-size: x-large; ">Mensajes</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="<?php echo base_url ('/consultas') ?>"style=" font-size: x-large; ">Listar Consultas</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="<?php echo base_url ('/contactos') ?>"style=" font-size: x-large; ">Listar Contactos</a></li>
    </ul>
  </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"style="color: #F6F1E9; font-size: x-large; ">Ventas</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="<?php echo base_url ('/facturas') ?>"style=" font-size: x-large; ">Listar Ventas</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="<?php echo base_url ('/ventas') ?>"style=" font-size: x-large; ">Listar todos los Detalles</a></li>
    </ul>
  </li>
</ul>



</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>

