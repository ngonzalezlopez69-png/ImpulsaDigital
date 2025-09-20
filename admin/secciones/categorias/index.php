<?php 

include("../../bd.php");

if(isset($_GET['txtId'])){
    //obtener registros con ID correspondinte
    $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
    //preparar la consulta delete 
    $consulta=$connection->prepare("DELETE FROM categoria WHERE id=:id");
    //bindear parametros
    $consulta->bindParam(":id",$txtId);
    //ejecutar la consulta eliminar desde la tabla categoria no olvidar el where XD
    $consulta->execute();

}
//preparar la consulta seleccionar todos los registros desde la tabla categoria
$consulta=$connection->prepare("SELECT * FROM `categoria`");
//ejecutar la consulta SQL
$consulta->execute();
//declarar la lista_categorias para utulizara en el foreach
$lista_categorias=$consulta->fetchAll(PDO::FETCH_ASSOC);
//incluir el header desde templates
include("../../templates/header.php");?>

    <div class="card-header bg-secondary py-3">
        <h6 class="text-center text-light">ImpulsaDigital Categorias</h6>
        <a name="" id="" class="btn btn-success" href="crear.php" role="button">Agregar Categoria</a>
        
    </div>
    <div class="card-body bg-light">
       
     <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_categorias as $registros){ ?>
                <tr class="">
                    <td scope="col"><?php echo $registros['id']; ?></td>
                    <td scope="col"><?php echo $registros['nombre_categoria']; ?></td>
                    <td scope="col"><?php echo $registros['descripcion_cat']; ?></td>
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
<div class="card-footer text-muted py-4 bg-secondary">
   
            <div class="container"><p class="m-0 text-center text-white">Copyright ImpulsaDigital &copy; Your Website 2025</p></div>
    </div>
<!--incluir archivo footer.php que esta en el directorio templates-->
</div>
<br><?php include("../../templates/footer.php");?>
