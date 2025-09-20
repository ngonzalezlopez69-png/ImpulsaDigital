<?php

session_start();
 if($_POST){
  //print_r($_POST);
 include("./bd.php");
    //recepcion de los valores del formulario
    $user=(isset($_POST['user']))?$_POST['user']:"";
    $password=(isset($_POST['password']))?$_POST['password']:"";
    
    $consulta=$connection->prepare("SELECT *,count(*) as n_user FROM login_asesor
    WHERE user=:user
    AND password=:password");
    
    $consulta->bindParam(":user",$user);
    $consulta->bindParam(":password",$password); 
    
    $consulta->execute();
    
    $lista_usuario=$consulta->fetch(PDO::FETCH_LAZY);

    if($lista_usuario['n_user']>0){
    $_SESSION['user']=$lista_usuario['user'];
    $_SESSION['logueado']=true;
     
    header("Location:index.php");

}else{
  $mensaje=("Usuario no registrado");
}
 }
  include("templates/headerLogin.php");
?>
<div class="container col-md-6"><br>
  <?php if(isset($mensaje)){ ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss= "alert"aria-label="Close"></button>
      <strong><?php echo $mensaje;?></strong>
  </div>
      <?php } ?>
  <div class="card bg-info">
<div class="card-header bg-secondary text-light text-center text-uppercase fw-bold mb-3">
     Login Asesor ImpulsaDigital
<br><br></div>
  <div class="card-body">
  <form action="" method="post">
     <div class="mb-4">
       <label for="user" class="form-label">Usuario</label>
          <input type="text"
          class="form-control" name="user" id="user" aria-describedby="helpId" placeholder="Ingrese usuario"required> 
     </div>
    <div class="mb-4">
    <label for="password" class="form-label">Contraseña</label>
         <input type="password"
         class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Ingrese contraseña"required>
     </div>
      <br>
      <div class="text-center"><input name="" id="" class="btn btn-success btn-lg" type="submit"value="Ingresar"></div>
    </form>
   </div>
  <div class="card-footer text-light bg-secondary text-xl-center">ImpulsaDigital<br><br>
  </div>
   </div>
</div>
 <br><br><br><br>
  </div>
  