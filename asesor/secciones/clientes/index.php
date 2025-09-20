<?php 
//incluir base de datos
include("../../bd.php");

if(isset($_GET['txtId'])){
    //borrar registros
    $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
    //prepara consulta SQL elimina datos desde la tabla cliente donde el id sea igual al :id
    $consulta=$connection->prepare("DELETE FROM cliente WHERE id=:id");
    $consulta->bindParam(":id",$txtId);
    $consulta->execute();

}
//prepara la consulta seleccionar todo desde la tabla cliente
$consulta=$connection->prepare("SELECT * FROM `cliente`");
//ejecutar sentencia sql select
$consulta->execute();

/**declarar lista_usuario foreach 
 * fetchAll() devuelve un array contodas las filas
 * de un conjunto de resultados.
 * FETCH_ASSOC devuelve un array indexado por
 *  los nombres de las columnas de un conjunto de resultados */
$lista_cliente=$consulta->fetchAll(PDO::FETCH_ASSOC);
//incluye el archivo header que se encuentra en directorio templates
include("../../templates/header.php");?>

<div class="card">
    <div class="card-header bg-secondary">
        <a name="" id="" class="btn btn-success" href="crear.php" role="button">Agregar Cliente</a>  
    </div>
    <div class="card-body">
       
     <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Gestionar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_cliente as $registros){ ?>
                <tr class="">
                    <td scope="col"><?php echo $registros['id']; ?></td>
                    <td scope="col"><?php echo $registros['nombre']; ?></td>
                    <td scope="col"><?php echo $registros['correo']; ?></td>
                    <td scope="col"><h6><?php echo $registros['empresa']; ?></h6></td>
                    <td scope="col"><?php echo $registros['telefono_empresa']; ?></td>
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
    <!--incluir o no el archivo footer.php que esta en el directorio templates-->
    </div>
    <div class="card-footer text-muted py-4 bg-secondary">
   
            <div class="container"><p class="m-0 text-center text-white">Copyright ImpulsaDigital &copy; Your Website 2025</p></div>
    </div>
<br>
