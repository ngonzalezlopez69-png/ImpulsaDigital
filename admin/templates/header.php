<?php
   session_start();
   $url_base = "/admin/";
   //se modificó la condición
   if(!isset($_SESSION['user'])){
       //se modificó la ruta al login 18-08-2025 Ngonzalez
      header("Location:".$url_base."login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Administrador ImpulsaDigital</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JQUERY 3.7.1 -->
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
  <!-- se agregó datatables 18-08-2025 -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css"  />
  
  <script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js" ></script>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <!--<link href="css/styles.css" rel="stylesheet" />-->
</head>
<style>
  body{
    background-color: gainsboro;
  }
</style>
<body>
  <header>
 <!-- place navbar here -->
 <div>
<nav class="navbar navbar-expand navbar-light py-4 bg-info">
        <div class="nav navbar-nav text-uppercase fw-bold">
            <a class="nav-item nav-link active" href="#" aria-current="page">Administrador <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/usuarios/">Usuarios</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/servicios/">Servicios</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/categorias/">Categorias</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/clientes/">Clientes</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/ventas/">Ventas</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/cuentas/">Cuentas</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/portafolio/">Portafolio</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/roles/">Roles</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>cerrar.php">Cerrar sesion</a>     
        </div><br>
      </div>
</nav>
</div>
</header>
<main class="container">
<br>
<script>
//script Sweet Alert el if indica que solamente si existe mensaje imprime alerta
<?php if (isset($_GET['mensaje'])) { ?>

Swal.fire({icon:"success", title:"<?php echo $_GET['mensaje']; ?>"});
<?php } ?>

</script>