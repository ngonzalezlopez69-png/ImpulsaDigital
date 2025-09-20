<?php
   session_start();
   $url_base = "/asesor/";
   //se modificó la condición solucionando
   if(!isset($_SESSION['user'])){
      header("Location:".$url_base."login.php");
}
?>
<!Doctype html>
<html lang="en">
<head>
  <title>Asesor ImpulsaDigital</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
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
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<style>
  body{
    background-color: gainsboro;
  }
</style>
<body>
  <header>
 <!-- place navbar here -->
<nav class="navbar navbar-expand navbar-light py-6 bg-info text-light">
        <div class="nav navbar-nav text-uppercase fw-bold ">
            <a class="nav-item nav-link active" href="#" aria-current="page">Asesor <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/portafolio/">Portafolio</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/categorias/">Categorias</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/clientes/">Clientes</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/ventas/">Ventas</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>cerrar.php">Cerrar sesion</a>     
        </div><br>
      </div>
</nav>
</div>
</header>
<main class="container">
<br>