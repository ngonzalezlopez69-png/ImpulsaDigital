<?php
include("admin/bd.php");
if($_POST){
    //recepciona los valores del formulario
    $nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
    $apellido=(isset($_POST['apellido']))?$_POST['apellido']:"";
    $rut=(isset($_POST['rut']))?$_POST['rut']:"";
    $correo=(isset($_POST['correo']))?$_POST['correo']:"";
    $telefono=(isset($_POST['telefono']))?$_POST['telefono']:"";
    $direccion=(isset($_POST['direccion']))?$_POST['direccion']:"";
    $rol_id = 3;
   //prepara la consulta sql insertar datos en la tabla usuario
    $consulta=$connection->prepare("INSERT INTO `usuario` (`nombre`, `apellido`,`rut`, `correo`,`telefono`, `direccion`, `rol_id`) 
    VALUES (:nombre, :apellido, :rut, :correo, :telefono, :direccion, :rol_id);");

     $consulta->bindParam(":nombre",$nombre);
     $consulta->bindParam(":apellido",$apellido);
     $consulta->bindParam(":rut",$rut);
     $consulta->bindParam(":correo",$correo);
     $consulta->bindParam(":telefono",$telefono); 
     $consulta->bindParam(":direccion",$direccion);
     $consulta->bindParam(":rol_id",$rol_id);

    $consulta->execute();
    $mensaje="Registro agregado con exito.";
    header("Location:admin/secciones/cuentas/registro.php?mensaje=".$mensaje);

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ngonzalez - ImpulsaDigital</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/ImpulsaDigital.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menú
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portafolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="asesor/login.php">Asesor</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin/login.php">Administrador</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
           <header class="masthead">
            <div class="container">
                <div class="masthead-subheading text-uppercase float-xl-center"></div>
                <div class="masthead-heading text-capitalize">Soluciones Innovadoras</div>
                <div class="masthead-subheading float-xl-center text-capitalize">ImpulsaDigital</div><br><br><br><br>
                <a class="btn btn-dark btn-xl text-uppercase" href="#contact">Contactame !</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center"><br>
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">ImpulsaDigital Soluciones Innovadoras.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x ">
                            <i class="fas fa-circle fa-stack-2x text-secondary"></i>
                            <i class="fa-solid fa-laptop-code fa-stack-1x text-info"></i>
                        </span>
                        <h4 class="my-3">Desarrollo de software</h4>
                        <p class="text-muted">Desarrollo de soluciones que se ajusten
                             a las necesidades específicas de clientes que requieren soluciones no cubiertas por software estándar.
                             </p>
                        <a class="btn btn-dark btn-sm text-uppercase mb-5" href="./admin/secciones/servicios/servicio.php">Ver mas !</a><br>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-secondary"></i>
                            <i class="fas fa-laptop fa-stack-1x text-info"></i>
                        </span>
                        <h4 class="my-3">Diseño UX</h4>
                        <p class="text-muted">Diseño e Implementación de una amplia gama de soluciones tecnológicas a medida.
                        Basadas en el pensamiento de Diseño y la satisfacción de clientes.</p>
                        <a class="btn btn-dark" href="admin/secciones/servicios/diseno-ux.php">VER MAS!</a>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-secondary"></i>
                            <i class="fa-solid fa-chess fa-stack-1x text-info"></i>
                        </span>
                        <h4 class="my-3">Gestión Estratégica</h4>
                        <p class="text-muted"> A través de esta plataforma, 
                        los clientes podrán acceder a servicios de alta calidad que les permitirán mejorar su gestión estratégica y operativa.</p>
                        <a class="btn btn-dark" href="admin/secciones/servicios/gestion-estrategica.php">VER MAS!</a>
                    </div>
                </div>
          
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-secondary"></i>
                            <i class="fa-solid fa-users-gear fa-stack-1x text-info"></i>
                        </span>
                        <h4 class="my-3">Capacitación</h4>
                        <p class="text-muted">ImpulsaDigital tiene como objetivo principal, entregar a las pymes, 
                        las herramientas tecnológicas y conocimientos necesarios en TI, lo que les permitirá optimizar y mejorar
                        su desempeño organizacional y tecnológico aumentado de esta manera su competividad en el mercado actual.</p>
                        <a class="btn btn-dark btn-sm text-uppercase mb-5" href="admin/secciones/servicios/capacitacion.php">Ver mas !</a>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-secondary"></i>
                            <i class="fa-solid fa-screwdriver-wrench fa-stack-1x text-info"></i>
                        </span>
                        <h4 class="my-3">Mejora de procesos</h4>
                        <p class="text-muted">Analizamos y optimizamos los flujos de trabajo de tu organizacion, elmininando cuellos de botella
                            reduciendo tiempos operativos. implementamos mejoras continuas que aumentan la eficiencia, elevan la calidad del 
                            servicio y facilitan la innovacion.</p>
                        <a class="btn btn-dark" href="admin/secciones/servicios/mejora-procesos.php">VER MAS!</a>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-secondary"></i>
                            <i class="fas fa-lock fa-stack-1x text-info"></i>
                        </span>
                        <h4 class="my-3">Seguridad Web</h4>
                        <p class="text-muted">Protegemos tus sistemas frente a amenazas digitales mediante auditorias, pruebas de penetracion
                            y planes de mitigacion. identificamos vulnerabilidad criticas y reforzamos tu infraestructura tecnologica, asegurando
                            la confidencialidad y confianza de tus clientes..</p>
                        <a class="btn btn-dark" href="admin/secciones/servicios/seguridad-web.php">VER MAS!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portafolio</h2>
                    <h3 class="section-subheading text-muted">ImpulsaDigital Soluciones Innovadoras.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover bg-info">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/agiles9.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ImpulsaDigital</div>
                                <div class="portfolio-caption-subheading text-muted">Cliente</div>
                                <p>Plataforma desarrollada para centralizar los servicios de la consultora,
                                pymes acceder a soluciones digitales, gestion de proyectos y capacitaciones en 
                                linea. Implementada con metologias agiles y base de datos optimizada.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover bg-info">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/agiles7.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Banco Santander</div>
                                <div class="portfolio-caption-subheading text-muted">Cliente</div>
                                <p>Proyecto orientado a la mejora de la experencias del cliente a 
                                    traves de encuentas web integradas al call center. Se redujo el
                                    tiempo real para la toma de decisiones estrategicas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover bg-info">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/agiles8.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Proyecto 3</div>
                                <div class="portfolio-caption-subheading text-muted">Cliente</div>
                                <p>Implementacion de un papel de control interactivo con graficos
                                    de rendimientos, distribucion de tareas y metricas de 
                                    productividad. Diseñado para mejorar la visibilidad de equipos
                                    de trabajo y agilizar el seguimiento de proyectos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover bg-info">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/agile.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Proyecto 3</div>
                                <div class="portfolio-caption-subheading text-muted">Cliente</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover bg-info">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/agile.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Proyecto 5</div>
                                <div class="portfolio-caption-subheading text-muted">Cliente</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-Portfolio item 6--
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover bg-info">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/agile.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Proyecto 6</div>
                                <div class="portfolio-caption-subheading text-muted">Cliente</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos</p>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center"><br>
                    <h2 class="section-heading text-uppercase">Sobre Nosotros</h2>
                    <h3 class="section-subheading text-dark">Blog ImpulsaDigital.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image border-secondary"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Inicio</h3>
                                <h5 class="subheading">Quienes Somos</h5>
                            </div>
                            <div class="timeline-body"><p class="text-muted">ImpulsaDigital es una empresa dedicada a ofrecer soluciones tecnológicas personalizadas
                                 a clientes que buscan optimizar los procesos y la gestión de sus pymes.
                                  A través de su nuevo portal web, la compañía busca brindar una plataforma digital
                                   donde los usuarios puedan acceder a una amplia gama de servicios tecnológicos 
                                   como; el desarrollo de software a la medida, mejora de procesos, capacitación organizacional,
                                   gestión de proyectos, y otros servicios relacionados con las TI.
                                    </p>
                        </div>
                    </li>
                    <li class="timeline-inverted border-secondary">
                        <div class="timeline-image border-secondary"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <h5 class="subheading">Design Thinking</h5>
                                <h3>Diseño de Experiencia Usuario</h3>
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Diseño e Implementación de
                                 una amplia gama de soluciones tecnológicas a medida. Basadas en el pensamiento de Diseño y la satisfacción de Clientes
                                 A través de esta plataforma, los clientes podrán acceder
                                  a servicios de alta calidad que les permitirán mejorar
                                  su gestión operativa, optimizar su rendimiento y competir
                                   de manera más efectiva en un mercado globalizado.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image border-secondary"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <h5 class="subheading">Transformación Digital</h4>
                                <h3>Desarrollo de Soluciones</h3>
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted container">ImpulsaDigital se basa en el concepto de transformación digital,
                                 que se refiere al uso de las tecnologías digitales para cambiar los procesos, la cultura organizacional
                                  y las experiencias de los clientes dentro de una empresa. Según diversos estudios,
                                   las TI son cruciales para la competitividad de las pymes, ya que mejoran la eficiencia operativa,
                                    la comunicación interna, la capacidad de innovación y facilitan la toma de decisiones.
                                    La creación de aplicaciones personalizadas que se ajusten a las necesidades específicas
                                     de una empresa permite mejorar la eficiencia operativa y agilizar procesos. Este servicio
                                    es clave para las empresas que requieren soluciones específicas no cubiertas por software estándar.
                                   </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image border-secondary"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <h5 class="subheading">Fase Producción</h5>
                            <h3>Gestíon Estratégica</h3>
                                
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">A través de esta plataforma,
                                los clientes podrán acceder a servicios de alta calidad que les permitirán
                                mejorar su gestión operativa, optimizar su rendimiento y competir de manera 
                                más efectiva en un mercado globalizado.
                                El sitio web no solo debe ser un medio de comunicación entre ImpulsaDigital y sus clientes,
                                sino también un canal de transformación que permita a las pymes acceder a los recursos 
                                tecnológicos que realmente necesitan, y a la empresa ImpulsaDigital expandir su influencia
                                a nivel nacional.
                                </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image bg-info text-dark border-secondary">
                            <h4>
                                Se parte
                                <br />
                                de esta
                                <br />
                                Historia!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Nosotros Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center"><br>
                    <h2 class="section-heading text-uppercase">Nuestro Equipo</h2>
                    <h3 class="section-subheading text-muted">ImpulsaDigital Soluciones Innovadoras.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle border-secondary" src="assets/img/team/foto11.jpg" alt="..." />
                            <h4>Nelson G</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ngonzalez Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ngonzalez Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ngonzalez LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle border-secondary" src="assets/img/team/foto22.jpg" alt="..." />
                            <h4>Maria F</h4>
                            <p class="text-muted">Project Manager</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ngonzalez Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ngonzalez Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ngonzalez LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle border-secondary" src="assets/img/team/foto33.jpg" alt="..." />
                            <h4>Camila G</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ngonzalez Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ngonzalez Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ngonzalez LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">ImpulsaDigital es un equipo de profesionales multidisciplinarios enfocados en atender las necesidades específicas de nuestros clientes y comprometidos con el cumplimiento de sus objetivos organizacionales.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
<!-- Contacto test 18-08-2025 Ngonzalez-->
<section class="page-section" id="contact">
<div class="container">
<div class="text-center">
     <h2 class="section-heading text-xl">ImpulsaDigital</h2>
     <p class="text-light">Registra tus datos y te contactaremos a la brevedad</p>
</div>   
<!-- INSERTAR y ADAPTAR FORMULARIO REGISTRO-->
    <div class="card-body text-light"> 
    
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-1">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId"placeholder="Ingrese Nombre"required>
    </div>

    <div class="mb-1">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text"
        class="form-control" name="apellido" id="apellido" aria-describedby="helpId"placeholder="Ingrese Apellido"required>
    </div>

    <div class="mb-1">
      <label for="rut" class="form-label">Rut</label>
      <input type="text"
      class="form-control" name="rut" id="rut" aria-describedby="helpId" placeholder="Ingrese Rut"required>
    </div>

    <div class="mb-1">
      <label for="correo" class="form-label">Correo</label>
      <input type="email" 
      class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Ingrese Correo"required>
    </div>

  <div class="mb-1">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="text"
      class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Ingrese Telefono"required>
  </div>
  <div class="mb-1">
    <label for="direccion" class="form-label">Direccion</label>
    <input type="text"
      class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Ingrese Dirección y número"required>
  </div><br>
  <div class="text-center"> 
<button type="submit" class="btn btn-lg btn btn-success" >Contáctame</button>
<a name="" id="" class="btn btn-lg btn btn-danger" href="index.php" role="button">Cancelar</a></div>
 </form>
</div>
</section>
<!-- Footer-->
    <div class="container-fluid bg-secondary text-light">
        <footer class="footer py-2">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright Ngonzalez &copy; Your Website Studio 2025</div>
                    <div class="col-lg-4 my-2 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
        </footer>
        </div>
        <!-- Portafolio Modales-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ImpulsaDigital</h2>
                                    <p class="item-intro text-muted">Desarrollo de Software.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/itserv.jpeg" alt="..." />
                                    <p>Desarrollamos software a medida para pymes: sitios web, integraciones y automatización. 
                                    Entregamos rápido, medible y seguro.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Descripción:</strong>
                                            Aplicación web ImpulsaDigital
                                        </li>
                                        <li>
                                            <strong>Cliente:</strong>
                                            ImpulsaDigital
                                        </li>
                                    </ul>
                                    <button class="btn btn-info btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Regresar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Banco Santander</h2>
                                    <p class="item-intro text-muted">Experiencia bancaria simple, segura y centrada en las personas.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/its.jpeg" alt="..." />
                                    <p>Plataforma de banca digital enfocada en usabilidad y confianza: operaciones claras, mensajes 
                                    simples y accesibilidad para todos!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Descripción:</strong>
                                            Diseño UX/UI
                                        </li>
                                        <li>
                                            <strong>Cliente:</strong>
                                            Banco Santander
                                        </li>
                                    </ul>
                                    <button class="btn btn-info btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Regresar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">TABLERO ÁGIL DE PROYECTOS</h2>
                                    <p class="item-intro text-muted">Visibilidad, foco y valor en cada entrega.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/itit.jpeg" alt="..." />
                                    <p>Tablero de portafolio con salud de sprint, burndown y priorización. 
                                    Enfoque en valor y foco del equipo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-info btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/its.jpeg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-info btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/itit.jpeg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-info btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/portada.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-info btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
