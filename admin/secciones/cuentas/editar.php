<?php 

include("../../bd.php");

if(isset($_GET['txtId'])){
  //Recuperar los datos del ID correspondinte
  $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
  $sentencia=$connection->prepare("SELECT * FROM login WHERE id=:id");
  $sentencia->bindParam(":id",$txtId);
  $sentencia->execute();
  $registro=$sentencia->fetch(PDO::FETCH_LAZY);

  $user=$registro['user'];
  $password=$registro['password'];
  

}
if($_POST){
  //print_r($_POST);

    //recepcionamos los valores del formulario
    $txtId=(isset($_POST['txtId']))?$_POST['txtId']:"";
    $user=(isset($_POST['user']))?$_POST['user']:"";
    $password=(isset($_POST['password']))?$_POST['password']:"";
    //$equipo=(isset($_POST['equipo']))?$_POST['equipo']:"";

    $sentencia=$connection->prepare("UPDATE login
    SET
    user=:user,
    password=:password
    WHERE id=:id");
    

     $sentencia->bindParam(":user",$user);
     $sentencia->bindParam(":password",$password); 
     
     $sentencia->bindParam(":id",$txtId);
     $sentencia->execute();
     $mensaje="Registro modificado con exito.";
     header("Location:index.php?mensaje=".$mensaje);

}

include("../../templates/header.php");?>

<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Editando la informacion de la Cuenta
    </div>
    <div class="card-body">
        
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="txtId" class="form-label">ID:</label>
      <input readonly value="<?php echo $txtId;?>" type="text"
        class="form-control" name="txtId" id="txtId" aria-describedby="helpId" placeholder="ID">
    </div>

    <div class="mb-3">
      <label for="user" class="form-label">Nombre Usuario</label>
      <input value="<?php echo $user;?>"type="text"
        class="form-control" name="user" id="user" aria-describedby="helpId" placeholder="usuario">
    </div>

  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input value="<?php echo $password;?>"type="text"
      class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="password">
    
  </div>


  <button type="submit" class="btn btn-success">Actualizar</button>

  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

</form>

</div>

    <div class="card-footer text-muted">
        
    </div>
</div>


<?php include("../../templates/footer.php");?>
