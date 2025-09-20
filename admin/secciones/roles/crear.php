<?php

include("../../bd.php");

if($_POST){

    //recepcionar los valores del formulario
    $nombre_rol=(isset($_POST['nombre_rol']))?$_POST['nombre_rol']:"";
    $fecha_registro=(isset($_POST['fecha_registro']))?$_POST['fecha_registro']:"";

    //$descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";

    $consulta=$connection->prepare("INSERT INTO `rol` (`id`, `nombre_rol`, `fecha_registro`) 
    VALUES (NULL, :nombre_rol, :fecha_registro);");
    

     $consulta->bindParam(":nombre_rol",$nombre_rol);
     $consulta->bindParam(":fecha_registro",$fecha_registro); 
     

    $consulta->execute();
    $mensaje="Registro agregado con exito.";
    header("Location:index.php?mensaje=".$mensaje);

}

include("../../templates/header.php");
?>

<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Crear roles
    </div>
    <div class="card-body">
        
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="nombre_rol" class="form-label">Nombre Rol</label>
      <input type="text"
      class="form-control" name="nombre_rol" id="nombre_rol" aria-describedby="helpId" placeholder="nombre rol">
    </div>

  <div class="mb-3">
    <label for="fecha_registro" class="form-label">Registro</label>
    <input type="text"
      class="form-control" name="fecha_registro" id="fecha_registro" aria-describedby="helpId" placeholder="registro">
    
  </div>
  <button type="submit" class="btn btn-success">Agregar</button>

  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

</form>

</div>

    <div class="card-footer text-muted">
        
    </div>
</div>