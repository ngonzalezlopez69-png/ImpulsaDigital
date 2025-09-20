<?php

include("../../bd.php");

if($_POST){
    //recepcionamos los valores del formulario
    $user=(isset($_POST['user']))?$_POST['user']:"";
    $password=(isset($_POST['password']))?$_POST['password']:"";
    $password= hash('sha512',$password);
    $user_id=(isset($_POST['user_id']))?$_POST['user_id']:"";
    
    $sentencia=$connection->prepare("INSERT INTO `login` (`id`, `user`, `password`, `user_id`) 
    VALUES (NULL, :user, :password, :user_id);");
    
    $sentencia->bindParam(":user",$user);
    $sentencia->bindParam(":password",$password); 
    $sentencia->bindParam(":user_id",$user_id);

    $sentencia->execute();
    $mensaje="Registro agregado con exito.";
    header("Location:index.php?mensaje=".$mensaje);

}

include("../../templates/header.php");
?>

<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Crear Cuenta test password hash
    </div>
    <div class="card-body">
        
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="user" class="form-label">Nombre Usuario</label>
      <input type="text"
      class="form-control" name="user" id="user" aria-describedby="helpId" placeholder="usuario">
    </div>

  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password"
      class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="password">
  </div>

  <div class="mb-3">
    <label for="user_id" class="form-label">Rol</label>
    <input type="text"
      class="form-control" name="user_id" id="user_id" aria-describedby="helpId" placeholder="rol">
  </div>

  <button type="submit" class="btn btn-success">Agregar</button>

  <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>

</form>
</div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<br><br>
<?php include("../../templates/footer.php");?>