<?php 

include("../../bd.php");

if(isset($_GET['txtId'])){
  //Recuperar los datos del ID correspondinte
  $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
  $consulta=$connection->prepare("SELECT * FROM rol WHERE id=:id");
  $consulta->bindParam(":id",$txtId);
  $consulta->execute();
  $registro=$consulta->fetch(PDO::FETCH_LAZY);

  $nombre_rol=$registro['nombre_rol'];
  $fecha_registro=$registro['fecha_registro'];

}
if($_POST){
  //print_r($_POST);
    $txtId=(isset($_POST['txtId']))?$_POST['txtId']:"";
    $nombre_rol=(isset($_POST['nombre_rol']))?$_POST['nombre_rol']:"";
    $fecha_registro=(isset($_POST['fecha_registro']))?$_POST['fecha_registro']:"";

    $consulta=$connection->prepare("UPDATE rol
    SET
    nombre_rol=:nombre_rol,
    fecha_registro=:fecha_registro
    WHERE id=:id");
    

     $consulta->bindParam(":nombre_rol",$nombre_rol);
     $consulta->bindParam(":fecha_registro",$fecha_registro); 
     $consulta->bindParam(":id",$txtId);

     $consulta->execute();
     $consulta="Registro modificado con exito.";
     header("Location:index.php?mensaje=".$mensaje);

}

include("../../templates/header.php");?>

<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Editar Rol
    </div>
    <div class="card-body">
        
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="txtId" class="form-label">Id Usuario</label>
      <input readonly value="<?php echo $txtId;?>" type="text"
        class="form-control" name="txtId" id="txtId" aria-describedby="helpId" placeholder="ID">
    </div>

    <div class="mb-3">
      <label for="nombre_rol" class="form-label">Nombre Rol</label>
      <input value="<?php echo $nombre_rol;?>"type="text"
        class="form-control" name="nombre_rol" id="nombre_rol" aria-describedby="helpId" placeholder="Nombre Rol"required>
    </div>

  <div class="mb-3">
    <label for="fecha_registro" class="form-label">Registro</label>
    <input value="<?php echo $fecha_registro;?>"type="text"
      class="form-control" name="fecha_registro" id="fecha_registro" aria-describedby="helpId" placeholder="fecha_registro">
  </div>
  <button type="submit" class="btn btn-success">Actualizar</button>
|
  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
</form>

</div>

    <div class="card-footer text-muted">
        
    </div>
</div>
<?php include("../../templates/footer.php");?>


