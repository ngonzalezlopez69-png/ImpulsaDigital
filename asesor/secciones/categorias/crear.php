<?php

include("../../bd.php");

if($_POST){
    //recepcionamos los valores del formulario
    $nombre_categoria=(isset($_POST['nombre_categoria']))?$_POST['nombre_categoria']:"";
    $descripcion_cat=(isset($_POST['descripcion_cat']))?$_POST['descripcion_cat']:"";

    $consulta=$connection->prepare("INSERT INTO `categoria` (`id`, `nombre_categoria`, `descripcion_cat`) 
    VALUES(NULL, :nombre_categoria, :descripcion_cat);");
    
     $consulta->bindParam(":nombre_categoria",$nombre_categoria);
     
     $consulta->bindParam(":descripcion_cat",$descripcion_cat);


    $consulta->execute();
    $mensaje="Registro agregado con exito.";
    header("Location:index.php?mensaje=".$mensaje);

}

include("../../templates/header.php");
?>

<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Crear Categoria
    </div>
    <div class="card-body">
        
    <form action=""enctype="multipart/form-data"type method="post">
  <div class="mb-3">
    <label for="nombre_categoria" class="form-label">Categoría</label>
    <input type="text"
      class="form-control" name="nombre_categoria" id="nombre_categoria" aria-describedby="helpId" placeholder="nombre categoria">
    
  </div>
  <div class="mb-3">
    <label for="descripcion_cat" class="form-label">Descripcion</label>
    <input type="text"
      class="form-control" name="descripcion_cat" id="descripcion_cat" aria-describedby="helpId" placeholder="descripcion">
    
  </div>

  <button type="submit" class="btn btn-success">Agregar</button>

  <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>

</form>

</div>

    <div class="card-footer text-muted">
        
    </div>
</div>


<?php include("../../templates/footer.php");?>