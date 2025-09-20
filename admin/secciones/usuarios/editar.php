<?php 

include("../../bd.php");

if(isset($_GET['txtId'])){
  //Recuperar los datos del ID correspondinte
  $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
  $consulta=$connection->prepare("SELECT * FROM usuario WHERE id=:id");
  $consulta->bindParam(":id",$txtId);
  $consulta->execute();
  $registro=$consulta->fetch(PDO::FETCH_LAZY);

  $nombre=$registro['nombre'];
  $apellido=$registro['apellido'];
  $rut=$registro['rut'];
  $correo=$registro['correo'];
  $telefono=$registro['telefono'];
  $direccion=$registro['direccion'];
  $rol_id=$registro['rol_id'];

}
if($_POST){
  //imprimir los datos que se estan enviando
  //print_r($_POST);

    //recibir los valores del formulario
    $txtId=(isset($_POST['txtId']))?$_POST['txtId']:"";
    $nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
    $apellido=(isset($_POST['apellido']))?$_POST['apellido']:"";
    $rut=(isset($_POST['rut']))?$_POST['rut']:"";
    $correo=(isset($_POST['correo']))?$_POST['correo']:"";
    $telefono=(isset($_POST['telefono']))?$_POST['telefono']:"";
    $direccion=(isset($_POST['direccion']))?$_POST['direccion']:"";
    $rol_id=(isset($_POST['rol_id']))?$_POST['rol_id']:"";
    
//preparar consulta Actualizar Usuario
    $consulta=$connection->prepare("UPDATE usuario
    SET
    nombre=:nombre,
    apellido=:apellido,
    rut=:rut,
    correo=:correo,
    telefono=:telefono,
    direccion=:direccion,
    rol_id=:rol_id
    WHERE id=:id");
    
    //bindear los parametros
     $consulta->bindParam(":nombre",$nombre);
     $consulta->bindParam(":apellido",$apellido);
     $consulta->bindParam(":rut",$rut);
     $consulta->bindParam(":correo",$correo);
     $consulta->bindParam(":telefono",$telefono); 
     $consulta->bindParam(":direccion",$direccion);
     $consulta->bindParam(":rol_id",$rol_id);
     $consulta->bindParam(":id",$txtId);
    //ejecutar la consulta
     $consulta->execute();
     //enviar mensaje
     $mensaje="Registro modificado con exito.";
     //redireccionar al index usuarios del modulo administracion
     header("Location:index.php?mensaje=".$mensaje);

}
//incluir archivo header.php que esta en el directorio templates
include("../../templates/header.php");?>

<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Editando la informacion del Usuario
    </div>
    <div class="card-body">
        
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="txtId" class="form-label">ID:</label>
      <input readonly value="<?php echo $txtId;?>" type="text"
        class="form-control" name="txtId" id="txtId" aria-describedby="helpId" placeholder="ID">
        
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input value="<?php echo $nombre;?>"type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="nombre">
      
    </div>

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido</label>
      <input value="<?php echo $apellido;?>"type="text"
        class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="apellido">
      
    </div>


    <div class="mb-3">
      <label for="rut" class="form-label">Rut</label>
      <input value="<?php echo $rut;?>"type="text"
        class="form-control" name="rut" id="rut" aria-describedby="helpId" placeholder="rut">
    </div>


    <div class="mb-3">
      <label for="correo" class="form-label">Correo</label>
      <input value="<?php echo $correo;?>"type="email"
        class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="correo">
    </div>
    

  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input value="<?php echo $telefono;?>"type="text"
      class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Telefono">
    
  </div>

  <div class="mb-3">
    <label for="direccion" class="form-label">Direccion</label>
    <input value="<?php echo $direccion;?>" type="text"
      class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="direccion">
    
  </div>
  
  <div class="mb-3">
      <label for="rol_id" class="form-label">Rol</label>
      <input value="<?php echo $rol_id;?>"type="number"
        class="form-control" name="rol_id" id="rol_id" aria-describedby="helpId" placeholder="Rol">
      
    </div>


  <button type="submit" class="btn btn-success">Actualizar</button>

  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

</form>

</div>

    <div class="card-footer text-muted">
        
    </div>
</div>
<!--incluir archivo footer.php que esta en el directorio templates
<?php include("../../templates/footer.php");?>