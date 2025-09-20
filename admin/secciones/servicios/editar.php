<?php 

include("../../bd.php");

if(isset($_GET['txtId'])){
  //Recuperar los datos del ID correspondinte
  $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
  $consulta=$connection->prepare("SELECT * FROM servicio WHERE id=:id");
  $consulta->bindParam(":id",$txtId);
  $consulta->execute();
  $registro=$consulta->fetch(PDO::FETCH_LAZY);

  $nombre_servicio=$registro['nombre_servicio'];
  $descripcion=$registro['descripcion'];
  $categoria_id=$registro['categoria_id'];
  $precio=$registro['precio'];

  $imagen_servicio=$registro['imagen_servicio'];
  $portafolio_id=$registro['portafolio_id'];
  $usuario_id=$registro['usuario_id'];
}
if($_POST){
  //imprimir los datos que se estan enviando
  //print_r($_POST);
  //print_r($_FILES);

    //recibir los valores del formulario
    $txtId=(isset($_POST['txtId']))?$_POST['txtId']:"";
    $nombre_servicio=(isset($_POST['nombre_servicio']))?$_POST['nombre_servicio']:"";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $categoria_id=(isset($_POST['categoria_id']))?$_POST['categoria_id']:"";
    $precio=(isset($_POST['precio']))?$_POST['precio']:"";
    //agregar $_FILES
    $imagen_servicio=(isset($_FILES['imagen_servicio']['name']))?$_FILES['imagen_servicio']['name']:"";
    $portafolio_id=(isset($_POST['portafolio_id']))?$_POST['portafolio_id']:"";
    $usuario_id=(isset($_POST['usuario_id']))?$_POST['usuario_id']:"";
    //preparar consulta Actualizar servicio
    $consulta=$connection->prepare("UPDATE servicio
    SET
    nombre_servicio=:nombre_servicio,
    descripcion=:descripcion,
    categoria_id=:categoria_id,
    precio=:precio,
    imagen_servicio=:imagen_servicio,
    portafolio_id=:portafolio_id,
    usuario_id=:usuario_id
    WHERE id=:id");
    
    //bindear los parametros
     $consulta->bindParam(":nombre_servicio",$nombre_servicio);
     $consulta->bindParam(":descripcion",$descripcion);
     $consulta->bindParam(":categoria_id",$categoria_id);
     $consulta->bindParam(":precio",$precio);
     $consulta->bindParam(":imagen_servicio",$imagen_servicio); 
     $consulta->bindParam(":portafolio_id",$portafolio_id);
     $consulta->bindParam(":usuario_id",$usuario_id);
     $consulta->bindParam(":id",$txtId);
    //ejecutar la consulta
     $consulta->execute();
     //enviar mensaje
     $mensaje="Registro modificado con exito.";
     //redireccionar al index servicios del modulo administración
     header("Location:index.php?mensaje=".$mensaje);

}
//incluir archivo header.php que esta en el directorio templates
include("../../templates/header.php");?>

<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Editar Servicio
    </div>
    <div class="card-body">
        
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="txtId" class="form-label">ID:</label>
      <input readonly value="<?php echo $txtId;?>" type="text"
        class="form-control" name="txtId" id="txtId" aria-describedby="helpId" placeholder="ID">
        
    </div>

    <div class="mb-3">
      <label for="nombre_servicio" class="form-label">Nombre</label>
      <input value="<?php echo $nombre_servicio;?>"type="text"
        class="form-control" name="nombre_servicio" id="nombre_servicio" aria-describedby="helpId" placeholder="nombre servicio"required>
      
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripcion</label>
      <input value="<?php echo $descripcion;?>"type="text"
        class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="descripcion"required>
      
    </div>


    <div class="mb-3">
      <label for="categoria_id" class="form-label">Categoria</label>
      <input value="<?php echo $categoria_id;?>"type="text"
        class="form-control" name="categoria_id" id="categoria_id" aria-describedby="helpId" placeholder="categoria">
    </div>


    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input value="<?php echo $precio;?>"type="number"
        class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="precio">
    </div>
    

  <div class="mb-3">
    <label for="imagen_servicio" class="form-label">Imagen</label>
    <input value="<?php echo $imagen_servicio;?>"type="file"
      class="form-control" name="imagen_servicio" id="imagen_servicio" aria-describedby="helpId" placeholder="imagen">
    
  </div>

  <div class="mb-3">
    <label for="portafolio_id" class="form-label">Portafolio</label>
    <input value="<?php echo $portafolio_id;?>" type="text"
      class="form-control" name="portafolio_id" id="portafolio_id" aria-describedby="helpId" placeholder="portafolio">
    
  </div>
  
  <div class="mb-3">
      <label for="usuario_id" class="form-label">Usuario</label>
      <input value="<?php echo $usuario_id;?>"type="text"
        class="form-control" name="usuario_id" id="usuario_id" aria-describedby="helpId" placeholder="usuario">
      
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