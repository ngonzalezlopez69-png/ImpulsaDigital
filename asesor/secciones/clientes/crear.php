<?php

include("../../bd.php");

if($_POST){

//print_r($_POST);
//print_r($_FILES);

    //recepciona los valores del formulario
    $nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
    $correo=(isset($_POST['correo']))?$_POST['correo']:"";



    $empresa=(isset($_POST['empresa']))?$_POST['empresa']:"";
    $telefono_empresa=(isset($_POST['telefono_empresa']))?$_POST['telefono_empresa']:"";
   
    //echo"$nombre";
    
    //Prepara la consulta insertar datos en la tabla cliente
    $consulta=$connection->prepare("INSERT INTO `cliente` (`id`, `nombre`, `correo`,`empresa`, `telefono_empresa`) 
    VALUES (NULL, :nombre, :correo,:empresa, :telefono_empresa);");

    /** bindParam bindea o vincula las variables a marcadores de posición en una sentencia sql
     * permite asignar los valores y evitar ataques de inyección sql */
     $consulta->bindParam(":nombre",$nombre);
     $consulta->bindParam(":correo",$correo);
     $consulta->bindParam(":empresa",$empresa);
     $consulta->bindParam(":telefono_empresa",$telefono_empresa);
    
    //ejecuta la consulta insertar en la tabla cliente
    $consulta->execute();
    //muestra mensaje exitoso
    $mensaje="Registro agregado con exito.";
    //redirecciona al index.php coorespondiente a la sección clientes
    header("Location:index.php?mensaje=".$mensaje);

}
//incluir header desde directorio templates
include("../../templates/header.php");
?>
 
<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Agregar Cliente 
    </div>
    <div class="card-body">
    <!-- enctype multipart/form-data permite enviar la imagen-->
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingresar Nombre"required>
    </div>
    <div class="mb-3">
      <label for="correo" class="form-label">Correo</label>
      <input type="email"
        class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Ingresar Correo"required>
    </div>
    <div class="mb-3">
      <label for="empresa" class="form-label">Empresa</label>
      <input type="text"
      class="form-control" name="empresa" id="empresa" aria-describedby="helpId" placeholder="Ingresar Empresa">
    </div>

    <div class="mb-3">
      <label for="tefono_empresa" class="form-label">Telefono</label>
      <input type="text" 
      class="form-control" name="telefono_empresa" id="telefono_empresa" aria-describedby="helpId" placeholder="Ingresar Telefono"required>
    </div>

  <button type="submit" class="btn btn-success">Agregar</button>
|
  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

</form>

</div>
    <div class="card-footer text-muted">
        
    </div>
<!--incluir archivo footer.php que esta en el directorio templates-->
