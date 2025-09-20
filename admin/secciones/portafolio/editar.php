<?php 

include("../../bd.php");

if(isset($_GET['txtId'])){
  //Obtener los datos del ID correspondiente
  $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
  $consulta=$connection->prepare("SELECT * FROM portafolio WHERE id=:id");
  $consulta->bindParam(":id",$txtId);
  $consulta->execute();

  //fetch_lazy crea nombres de variables durante el acceso y crea un objeto sin nombre
  $registro=$consulta->fetch(PDO::FETCH_LAZY);

  $titulo=$registro['titulo'];
  $subtitulo=$registro['subtitulo'];
  $imagen_portafolio=$registro['imagen_portafolio'];
  $descripcion=$registro['descripcion'];
  $cliente=$registro['cliente'];

}
if($_POST){
  //imprimir los datos que se estan enviando
  //registros
  //print_r($_POST);
  //imagenes
  //print_r($_FILES);

  //recibir los valores del formulario
    $txtId=(isset($_POST['txtId']))?$_POST['txtId']:"";
    $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
    $subtitulo=(isset($_POST['subtitulo']))?$_POST['subtitulo']:"";
    $imagen_portafolio=(isset($_FILES['imagen_portafolio']['name']))?$_FILES['imagen_portafolio']['name']:"";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $cliente=(isset($_POST['cliente']))?$_POST['cliente']:"";
//preparar consulta Actualizar
    $consulta=$connection->prepare("UPDATE portafolio
    SET
    titulo=:titulo,
    subtitulo=:subtitulo,
    imagen_portafolio=:imagen_portafolio,
    descripcion=:descripcion,
    cliente=:cliente
    WHERE id=:id");
    
    //bindear los parametros
     $consulta->bindParam(":titulo",$titulo);
     $consulta->bindParam(":subtitulo",$subtitulo);
     $consulta->bindParam(":imagen_portafolio",$imagen_portafolio);
     $consulta->bindParam(":descripcion",$descripcion);
     $consulta->bindParam(":cliente",$cliente); 
     $consulta->bindParam(":id",$txtId);
    //ejecutar la consulta
     $consulta->execute();
     //enviar mensaje
     $mensaje="Registro modificado con exito.";
     //redireccionar al index portafolio del modulo administracion
     header("Location:index.php?mensaje=".$mensaje);

}
//incluir archivo header.php que esta en el directorio templates
include("../../templates/header.php");?>
<div class="card">
    <div class="card-header">
        Editar Proyecto del Portafolio
    </div>
    <div class="card-body">
    <!-- enctype multipart/form-data permite enviar la imagen-->
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="txtId" class="form-label">ID</label>
      <input readonly value="<?php echo $txtId;?>" type="text"
        class="form-control" name="txtId" id="txtId" aria-describedby="helpId" placeholder="ID">
    </div>
    <div class="mb-3">
      <label for="titulo" class="form-label">Titulo</label>
      <input value="<?php echo $titulo;?>" type="text"
        class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Ingresar Titulo"required>
    </div>

    <div class="mb-3">
      <label for="subtitulo" class="form-label">Subtitulo</label>
      <input value="<?php echo $subtitulo;?>"type="text"
        class="form-control" name="subtitulo" id="subtitulo" aria-describedby="helpId" placeholder="Ingresar Subtitulo"required>
    </div>
    <div class="mb-3">
      <label for="imagen_portafolio" class="form-label">Imagen</label>
      <input value="<?php echo $imagen_portafolio;?>"type="file"
      class="form-control" name="imagen_portafolio" id="imagen_portafolio" aria-describedby="helpId" placeholder="Ingresar Imagen">
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripcion</label>
      <input value="<?php echo $descripcion;?>"type="text" 
      class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Ingresar Descripción"required>
    </div>

  <div class="mb-3">
    <label for="cliente" class="form-label">Cliente</label>
    <input value="<?php echo $cliente;?>" type="text"
      class="form-control" name="cliente" id="cliente" aria-describedby="helpId" placeholder="Ingresar Cliente"required>
  </div>
  
  <button type="submit" class="btn btn-success">Actualizar</button>
 
  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

</form>

</div>

    <div class="card-footer text-muted">
    </div>
    <!--incluir archivo footer.php que esta en el directorio templates-->

</div>


