<?php 

include("../../bd.php");

if(isset($_GET['txtId'])){
    //borrar registros por id
    $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
    $sentencia=$connection->prepare("DELETE FROM login WHERE id=:id");
    $sentencia->bindParam(":id",$txtId);
    $sentencia->execute();

}

//seleccionar registros desde login
$sentencia=$connection->prepare("SELECT * FROM `login`");
$sentencia->execute();

$lista_login=$sentencia->fetchAll(PDO::FETCH_ASSOC);

include("../../templates/header.php");?>

<div class="card">
    <div class="card-header bg-secondary">
        <a name="" id="" class="btn btn-success" href="crear.php" role="button">Agregar Cuenta</a>
        
    </div>
    <div class="card-body">
       
     <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Password</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_login as $registros){ ?>
                <tr class="">
                    <td><?php echo $registros['id']; ?></td>
                    <td><?php echo $registros['user']; ?></td>
                    <td><?php echo $registros['password']; ?></td>
                    <td><?php echo $registros['user_id']; ?></td>
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
    <!--incluir archivo footer.php que esta en el directorio templates-->
</div>
<div class="card-footer text-muted py-4 bg-secondary">
   
            <div class="container"><p class="m-0 text-center text-white">Copyright ImpulsaDigital &copy; Your Website 2025</p></div>
    </div>
<br>
