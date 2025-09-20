<?php 

include("../../bd.php");

if(isset($_GET['txtId'])){
    //borrar dichos registros con ID correspondinte
    $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
    $consulta=$connection->prepare("DELETE FROM rol WHERE id=:id");
    $consulta->bindParam(":id",$txtId);
    $consulta->execute();

}

//seleccionar registros
$consulta=$connection->prepare("SELECT * FROM `rol`");
//$consulta=$connection->prepare("SELECT * FROM `usuario`");
$consulta->execute();

$lista_roles=$consulta->fetchAll(PDO::FETCH_ASSOC);

include("../../templates/header.php");?>

<div class="card">
    
    <div class="card-header bg-secondary">
        <h6 class="text-center text-light">ImpulsaDigital Roles</h6>
        <!--<a name="" id="" class="btn btn-success py-2" href="crear.php" role="button">Agregar Rol</a>-->
        
    </div>
    <div class="card-body">
       
     <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <!--<th scope="col">Rol</th>-->
                    <th scope="col">Nombre Rol</th>
                    <th scope="col">Registro</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_roles as $registros){ ?>
                <tr class="">
                    <td><?php echo $registros['id']; ?></td>
                    <td><?php echo $registros['nombre_rol']; ?></td>
                    <!--<td><?php echo $registros['nombre']; ?></td>-->
                    <td><?php echo $registros['fecha_registro']; ?></td>
                    <td>
                      <a name="" id="" class="btn btn-info" href="editar.php? txtId=<?php echo $registros['id']; ?>" role="button">Editar</a> 
                    <a name="" id="" class="btn btn-danger" href="index.php? txtId=<?php echo $registros['id']; ?>" role="button">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
     </div>
    </div>
    </div>
    <div class="card-footer text-muted py-4 bg-secondary">
   
            <div class="container"><p class="m-0 text-center text-white">Copyright ImpulsaDigital &copy; Your Website 2025</p></div>
    </div>
<br>