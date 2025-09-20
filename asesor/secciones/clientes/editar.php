<?php 

include("../../bd.php");

if(isset($_GET['txtId'])){
  //Obtener los datos del ID correspondiente
  $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
  $consulta=$connection->prepare("SELECT * FROM cliente WHERE id=:id");
  $consulta->bindParam(":id",$txtId);
  $consulta->execute();

  //fetch_lazy crea nombres de variables durante el acceso y crea un objeto sin nombre
  $registro=$consulta->fetch(PDO::FETCH_LAZY);

  $nombre=$registro['nombre'];
  $correo=$registro['correo'];
  $empresa=$registro['empresa'];
  $telefono_empresa=$registro['telefono_empresa'];

}
if($_POST){
  //imprimir los datos que se estan enviando
  //registros
  //print_r($_POST);
  //recibir los valores del formulario
    $txtId=(isset($_POST['txtId']))?$_POST['txtId']:"";
    $nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
    $correo=(isset($_POST['correo']))?$_POST['correo']:"";
    
    $empresa=(isset($_POST['empresa']))?$_POST['empresa']:"";
    $telefono_empresa=(isset($_POST['telefono_empresa']))?$_POST['telefono_empresa']:"";
//preparar consulta Actualizar
    $consulta=$connection->prepare("UPDATE cliente
    SET
    nombre=:nombre,
    correo=:correo,
    empresa=:empresa,
    telefono_empresa=:telefono_empresa
    WHERE id=:id");
    
    //bindear los parametros
     $consulta->bindParam(":nombre",$nombre);
     $consulta->bindParam(":correo",$correo);
     $consulta->bindParam(":empresa",$empresa);
     $consulta->bindParam(":telefono_empresa",$telefono_empresa);
 
     $consulta->bindParam(":id",$txtId);
    //ejecutar la consulta
     $consulta->execute();
     //enviar mensaje
     $mensaje="Registro modificado con exito.";
     //redireccionar al index cliente del modulo administracion
     header("Location:index.php?mensaje=".$mensaje);

}
//incluir archivo header.php que esta en el directorio templates
include("../../templates/header.php");?>
<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Editar Cliente
    </div>
    <div class="card-body">
    <!-- enctype multipart/form-data permite enviar la imagen-->
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="txtId" class="form-label">ID</label>
      <input readonly value="<?php echo $txtId;?>" type="text"
        class="form-control" name="txtId" id="txtId" aria-describedby="helpId" placeholder="ID">
    </div>
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input value="<?php echo $nombre;?>" type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingresar Nombre"required>
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo</label>
      <input value="<?php echo $correo;?>"type="email"
        class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Ingresar Correo"required>
    </div>
    <div class="mb-3">
      <label for="empresa" class="form-label">Empresa</label>
      <input value="<?php echo $empresa;?>"type="text"
      class="form-control" name="empresa" id="empresa" aria-describedby="helpId" placeholder="Ingresar Empresa">
    </div>

    <div class="mb-3">
      <label for="telefono_empresa" class="form-label">Telefono</label>
      <input value="<?php echo $telefono_empresa;?>"type="text" 
      class="form-control" name="telefono_empresa" id="telefono_empresa" aria-describedby="helpId" placeholder="Ingresar Telefono"required>
    </div>
  
  <button type="submit" class="btn btn-success">Actualizar</button>
 
  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

</form>

</div>

    <div class="card-footer text-muted">
    </div>
    <!--incluir archivo footer.php que esta en el directorio templates-->

</div>


