<?php 

include("../../bd.php");

if(isset($_GET['txtId'])){
  //Recuperar los datos del ID correspondiente
  $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
  $consulta=$connection->prepare("SELECT * FROM categoria WHERE id=:id");
  $consulta->bindParam(":id",$txtId);
  $consulta->execute();
  $registro=$consulta->fetch(PDO::FETCH_LAZY);

  $nombre_categoria=$registro['nombre_categoria'];
  $descripcion_cat=$registro['descripcion_cat'];

}
if($_POST){
  //print_r($_POST);

    //recepciona los valores del formulario
    $txtId=(isset($_POST['txtId']))?$_POST['txtId']:"";
    $nombre_categoria=(isset($_POST['nombre_categoria']))?$_POST['nombre_categoria']:"";
    $descripcion_cat=(isset($_POST['descripcion_cat']))?$_POST['descripcion_cat']:"";

    $consulta=$connection->prepare("UPDATE categoria
    SET
    nombre_categoria=:nombre_categoria,
    descripcion_cat=:descripcion_cat
    WHERE id=:id");

     $consulta->bindParam(":nombre_categoria",$nombre_categoria);
     $consulta->bindParam(":descripcion_cat",$descripcion_cat);
     $consulta->bindParam(":id",$txtId);
     $consulta->execute();
     $mensaje="Registro modificado con exito.";
     header("Location:index.php?mensaje=".$mensaje);

}
include("../../templates/header.php");?>

<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Editar categoría
    </div>
    <div class="card-body">
        
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="txtId" class="form-label">ID</label>
      <input readonly value="<?php echo $txtId;?>" type="text"
        class="form-control" name="txtId" id="txtId" aria-describedby="helpId" placeholder="ID">
    </div>

    <div class="mb-3">
      <label for="nombre_categoria" class="form-label">Nombre</label>
      <input value="<?php echo $nombre_categoria;?>"type="text"
        class="form-control" name="nombre_categoria" id="nombre_categoria" aria-describedby="helpId" placeholder="categoria">
    </div>
  <div class="mb-3">
    <label for="descripcion_cat" class="form-label">Descripcion</label>
    <input value="<?php echo $descripcion_cat;?>" type="text"
      class="form-control" name="descripcion_cat" id="descripcion_cat" aria-describedby="helpId" placeholder="descripcion">
  </div>
  <button type="submit" class="btn btn-success">Actualizar</button>
  |
  <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
</form>
</div>
    <div class="card-footer text-muted">  
    </div>
</div>


<?php include("../../templates/footer.php");?>