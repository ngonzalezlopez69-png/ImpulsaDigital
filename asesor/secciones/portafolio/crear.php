<?php

include("../../bd.php");

if($_POST){

//print_r($_POST);
//print_r($_FILES);

    //recepciona los valores del formulario
    $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
    $subtitulo=(isset($_POST['subtitulo']))?$_POST['subtitulo']:"";

    //la variable $_FILES es una matriz asociativa que almacena los nombres, tipos y tamaños de los archivos
    $imagen_portafolio=(isset($_FILES['imagen_portafolio']['name']))?$_FILES['imagen_portafolio']['name']:"";

    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $cliente=(isset($_POST['cliente']))?$_POST['cliente']:"";
   
    //echo"$imagen_portafolio";
    
    $fecha_imagen=new DateTime();
    $nombre_archivo_imagen_portafolio=($imagen_portafolio!="")?$fecha_imagen->getTimestamp()."_".$imagen_portafolio:"";
    
    $tmp_imagen_portafolio=$_FILES["imagen_portafolio"]["tmp_name"];
    if($tmp_imagen_portafolio!=""){
      move_uploaded_file($tmp_imagen_portafolio,"../../../assets/img/portfolio/".$nombre_archivo_imagen_portafolio);

    }
    //Prepara la consulta insertar datos en la tabla portafolio
    $consulta=$connection->prepare("INSERT INTO `portafolio` (`id`, `titulo`, `subtitulo`,`imagen_portafolio`, `descripcion`,`cliente`) 
    VALUES (NULL, :titulo, :subtitulo,:imagen_portafolio, :descripcion, :cliente);");

    /** bindParam bindea o vincula las variables a marcadores de posición en una sentencia sql
     * permite asignar los valores y evitar ataques de inyección sql */
     $consulta->bindParam(":titulo",$titulo);
     $consulta->bindParam(":subtitulo",$subtitulo);
     $consulta->bindParam(":imagen_portafolio",$imagen_portafolio);
     $consulta->bindParam(":descripcion",$descripcion);
     $consulta->bindParam(":cliente",$cliente); 
    
    //ejecuta la consulta insertar en la tabla portafolio
    $consulta->execute();
    //muestra mensaje exitoso
    $mensaje="Registro agregado con exito.";
    //redirecciona al index.php coorespondiente a la sección portafolio
    header("Location:index.php?mensaje=".$mensaje);

}
//incluir header desde directorio templates
include("../../templates/header.php");
?>
 
<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Agregar Proyecto a Portafolio
    </div>
    <div class="card-body">
    <!-- enctype multipart/form-data permite enviar la imagen-->
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="titulo" class="form-label">Titulo</label>
      <input type="text"
        class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Ingresar Titulo"required>
    </div>
    <div class="mb-3">
      <label for="subtitulo" class="form-label">Subtitulo</label>
      <input type="text"
        class="form-control" name="subtitulo" id="subtitulo" aria-describedby="helpId" placeholder="Ingresar Subtitulo"required>
    </div>
    <div class="mb-3">
      <label for="imagen_portafolio" class="form-label">Imagen</label>
      <input type="file"
      class="form-control" name="imagen_portafolio" id="imagen_portafolio" aria-describedby="helpId" placeholder="Ingresar Imagen">
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripcion</label>
      <input type="text" 
      class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Ingresar Descripción"required>
    </div>

  <div class="mb-3">
    <label for="cliente" class="form-label">Cliente</label>
    <input type="text"
      class="form-control" name="cliente" id="cliente" aria-describedby="helpId" placeholder="Ingresar Cliente"required>
    
  </div>

  <button type="submit" class="btn btn-success">Agregar</button>
|
  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

</form>

</div>
    <div class="card-footer text-muted">
        
    </div>
<!--incluir archivo footer.php que esta en el directorio templates-->



