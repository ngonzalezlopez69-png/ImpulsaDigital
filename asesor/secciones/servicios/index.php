<?php 
//incluir base de datos
include("../../bd.php");

if(isset($_GET['txtId'])){
    //borrar los registros con ID correspondinte
    $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
    //prepara consulta SQL elimina datos desde la tabla servicio donde el id sea igual al :id
    $consulta=$connection->prepare("DELETE FROM servicio WHERE id=:id");
    $consulta->bindParam(":id",$txtId);
    $consulta->execute();

}
//seleccionar registros
$consulta=$connection->prepare("SELECT * FROM `servicio`");
//ejecutar sentencia sql
$consulta->execute();

//declarar lista_usuario foreach
$lista_servicio=$consulta->fetchAll(PDO::FETCH_ASSOC);
//incluir el archivo header que se encuentra en directorio templates
include("../../templates/header.php");?>
<div class="container">
<div class="card">
    <div class="card-header bg-secondary">
        <a name="" id="" class="btn btn-success" href="crear.php" role="button">Agregar Servicio</a>  
    </div>
    <div class="card-body">
       
     <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Portafolio</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Fecha Registro</th>
                    <th scope="col">Gestionar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_servicio as $registros){ ?>
                <tr class="">
                    <td scope="col"><?php echo $registros['id']; ?></td>
                    <td scope="col"><?php echo $registros['nombre_servicio']; ?></td>
                    <td scope="col"><?php echo $registros['descripcion']; ?></td>
                    <td scope="col"><?php echo $registros['categoria_id']; ?></td>
                    <td scope="col"><?php echo $registros['precio']; ?></td>
                    <td scope="col"><img width="50" src="../../../assets/img/services/<?php echo $registros['imagen_servicio']; ?>"/>
                    <td scope="col"><?php echo $registros['portafolio_id']; ?></td>
                    <td scope="col"><?php echo $registros['usuario_id']; ?></td>
                    <td scope="col"><?php echo $registros['date_updated_service']; ?></td>
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
    </div>
    <div class="card-footer text-muted py-4 bg-secondary">
   
            <div class="container"><p class="m-0 text-center text-white">Copyright ImpulsaDigital &copy; Your Website 2025</p></div>
    </div>
</div>


<!--incluir archivo footer.php que esta en el directorio templates-->