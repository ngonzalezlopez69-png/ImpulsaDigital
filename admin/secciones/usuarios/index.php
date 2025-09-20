<?php 
//incluir base de datos
include("../../bd.php");

if(isset($_GET['txtId'])){
    //borrar registros con ID correspondinte
    $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
    //prepara consulta SQL elimina datos desde la tabla usuarios donde el id sea igual al :id
    $sentencia=$connection->prepare("DELETE FROM usuario WHERE id=:id");
    $sentencia->bindParam(":id",$txtId);
    $sentencia->execute();

}
//prepara la consulta seleccionar todo desde la tabla usuario
$sentencia=$connection->prepare("SELECT * FROM `usuario`");
//ejecutar sentencia sql
$sentencia->execute();

//declarar lista_usuario foreach
$lista_usuario=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//incluye el archivo header que se encuentra en directorio templates
include("../../templates/header.php");?>

<div class="card-header bg-secondary py-2">
        <h6 class="text-center text-light">ImpulsaDigital Usuarios</h6>
        <a name="" id="" class="btn btn-success" href="crear.php" role="button">Agregar Usuario</a>  
    </div>
    <div class="card-body bg-light py-1">
     <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Fecha Registro</th>
                    <th scope="col">Gestionar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_usuario as $registros){ ?>
                <tr class="">
                    <td scope="col"><?php echo $registros['id']; ?></td>
                    <td scope="col"><?php echo $registros['nombre']; ?></td>
                    <td scope="col"><?php echo $registros['apellido']; ?></td>
                    <td scope="col"><?php echo $registros['rut']; ?></td>
                    <td scope="col"><?php echo $registros['correo']; ?></td>
                    <td scope="col"><?php echo $registros['telefono']; ?></td>
                    <td scope="col"><?php echo $registros['direccion']; ?></td>
                    <td scope="col"><?php echo $registros['rol_id']; ?></td>
                    <td scope="col"><?php echo $registros['fecha_registro']; ?></td>
                    <td scope="col">
                      <a name="" id="" class="btn btn-warning" href="editar.php? txtId=<?php echo $registros['id']; ?>" role="button">Editar</a> 
                    <a name="" id="" class="btn btn-danger" href="index.php? txtId=<?php echo $registros['id']; ?>" role="button">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
     </div>
    </div>
    
    <div class="card-footer text-muted py-3 bg-secondary">
   
            <div class="container"><p class="m-0 text-center text-white">Copyright ImpulsaDigital &copy; Your Website 2025</p></div>

        </div><br>
        <!--incluir archivo footer.php que esta en el directorio templates-->
        <?php include("../../templates/footer.php");?>



