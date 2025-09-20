<?php

include("../../bd.php");

if($_POST){
    //recepcionamos los valores del formulario
    $nombre_servicio=(isset($_POST['nombre_servicio']))?$_POST['nombre_servicio']:"";

    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $categoria_id=(isset($_POST['categoria_id']))?$_POST['categoria_id']:"";

    $precio=(isset($_POST['precio']))?$_POST['precio']:"";

    //la variable $_FILES es una matriz asociativa que almacena los nombres, tipos y tamaños de los archivos
    $imagen_servicio=(isset($_FILES['imagen_servicio']['name']))?$_FILES['imagen_servicio']['name']:"";
   

    $portafolio_id=(isset($_POST['portafolio_id']))?$_POST['portafolio_id']:"";

    $usuario_id=(isset($_POST['usuario_id']))?$_POST['usuario_id']:"";

     //echo"$imagen_servicio";
    
     $fecha_imagen=new DateTime();
     $nombre_archivo_imagen_servicio=($imagen_servicio!="")?$fecha_imagen->getTimestamp()."_".$imagen_servicio:"";
     
     $tmp_imagen_servicio=$_FILES["imagen_servicio"]["tmp_name"];
     if($tmp_imagen_servicio!=""){
       move_uploaded_file($tmp_imagen_servicio,"../../../assets/img/services/".$nombre_archivo_imagen_servicio);
 
     }
    //Prepara la consulta insertar datos en la tabla usuario
    $consulta=$connection->prepare("INSERT INTO `servicio` (`id`, `nombre_servicio`, `descripcion`, `categoria_id`, `precio`,`imagen_servicio`, `portafolio_id`, `usuario_id`) 
    VALUES (NULL, :nombre_servicio, :descipcion,:categoria_id, :precio, :imagen_servicio, :portafolio_id, :usuario_id);");
    

     $consulta->bindParam(":nombre_servicio",$nombre_servicio);
     $consulta->bindParam(":descripcion",$descripcion);
     $consulta->bindParam(":categoria_id",$categoria_id);
     $consulta->bindParam(":precio",$precio);
     $consulta->bindParam(":imagen_servicio",$imagen_servicio); 
     $consulta->bindParam(":portafolio_id",$portafolio_id);
     $consulta->bindParam(":usuario_id",$usuario_id);


    $consulta->execute();
    $mensaje="Registro agregado con exito.";
    header("Location:index.php?mensaje=".$mensaje);

}

include("../../templates/header.php");
?>
 
<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Crear Servicios
    </div>
    <div class="card-body">
        
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="nombre_servicio" class="form-label">Nombre</label>
      <input type="text"
        class="form-control" name="nombre_servicio" id="nombre_servicio" aria-describedby="helpId" placeholder="Ingresar Nombre">
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripcion</label>
      <input type="text"
        class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Ingresar Descripción">
    </div>
    <div class="mb-3">
      <label for="categoria_id" class="form-label">Categoria</label>
      <input type="text"
      class="form-control" name="categoria_id" id="categoria_id" aria-describedby="helpId" placeholder="Ingresar Categoria">
    </div>

    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" 
      class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Ingresar Precio">
    </div>

  <div class="mb-3">
    <label for="imagen_servicio" class="form-label">Imagen</label>
    <input type="file"
      class="form-control" name="imagen_servicio" id="imagen_servicio" aria-describedby="helpId" placeholder="Ingresar Imagen">
    
  </div>

  <div class="mb-3">
    <label for="portafolio_id" class="form-label">Portafolio</label>
    <input type="text"
      class="form-control" name="portafolio_id" id="portafolio_id" aria-describedby="helpId" placeholder="Ingresar id portafolio">
  </div>
  
  <div class="mb-3">
      <label for="usuario_id" class="form-label">Usuario</label>
      <input type="text"
        class="form-control" name="usuario_id" id="usuario_id" aria-describedby="helpId" placeholder="Ingresar Usuario">
    </div>

  <button type="submit" class="btn btn-success">Agregar</button>
 

  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

</form>

</div>

    <div class="card-footer text-muted">
        
    </div>
    
</div>


