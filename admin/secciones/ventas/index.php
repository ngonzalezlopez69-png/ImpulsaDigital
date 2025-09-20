<?php 
//incluir base de datos
include("../../bd.php");

if(isset($_GET['txtId'])){
    //borrar dichos registros con ID correspondinte
    $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
    //prepara consulta SQL elimina datos desde la tabla detalle donde el id sea igual al :id
    $sentencia=$connection->prepare("DELETE FROM detalle_pago WHERE id=:id");
    $sentencia->bindParam(":id",$txtId);
    $sentencia->execute();

}
//seleccionar registros
$sentencia=$connection->prepare("SELECT * FROM `detalle_pago`");
//ejecutar sentencia sql
$sentencia->execute();

//declarar lista_detalle foreach
$lista_detalle=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//incluye el archivo header que se encuentra en directorio templates
include("../../templates/header.php");?>

<div class="card-header bg-secondary text-center text-light py-3">
        <h6 class="text-center text-light">ImpulsaDigital Ventas</h6>
       <!-- <a name="" id="" class="btn btn-success" href="#" role="button">Agregar Usuario</a> --> 
    </div>
    <div class="card-body bg-light">
       
     <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rut Cliente</th>
                    <th scope="col">Numero de cuenta</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Transferencia</th>
                    <th scope="col">Tipo Cuenta</th>
                    <th scope="col">Banco</th>
                      <th scope="col">Estado</th>
                    <th scope="col">Fecha Registro</th>
                    <th scope="col">Gestionar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_detalle as $registros){ ?>
                <tr class="">
                    <td scope="col"><?php echo $registros['id']; ?></td>
                    <td scope="col"><?php echo $registros['rut_cliente']; ?></td>
                    <td scope="col"><?php echo $registros['numero_cuenta']; ?></td>
                    <td scope="col"><?php echo $registros['monto']; ?></td>
                    <td scope="col"><?php echo $registros['cuenta_tranfer']; ?></td>
                    <td scope="col"><?php echo $registros['tipo_cuenta']; ?></td>
                    <td scope="col"><?php echo $registros['banco']; ?></td>
                    <td scope="col"><?php echo $registros['estado']; ?></td>
                    <td scope="col"><?php echo $registros['fecha']; ?></td>
                    <td scope="col">
                      <a name="" id="" class="btn btn-warning" href="editar.php? txtId=<?php echo $registros['id']; ?>" role="button">Editar</a> 
                    <!--<a name="" id="" class="btn btn-danger" href="index.php? txtId=<?php echo $registros['id']; ?>" role="button">Eliminar</a>
                    </td>-->
                </tr>
                <?php } ?>
            </tbody>
        </table>
     </div>
    </div>
    <div class="card-footer text-muted py-4 bg-secondary">
   
            <div class="container"><p class="m-0 text-center text-white">Copyright ImpulsaDigital &copy; Your Website 2025</p></div>
    </div>
</div>
<!--incluir archivo footer.php que esta en el directorio templates-->
 <?php include("../../templates/footer.php");?>