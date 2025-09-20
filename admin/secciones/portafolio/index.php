<?php 
//incluir base de datos
include("../../bd.php");

if(isset($_GET['txtId'])){
    //borrar registros
    $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
    //prepara consulta SQL elimina datos desde la tabla usuarios donde el id sea igual al :id
    $consulta=$connection->prepare("DELETE FROM portafolio WHERE id=:id");
    $consulta->bindParam(":id",$txtId);
    $consulta->execute();

}
//prepara la consulta seleccionar todo desde la tabla portafolio
$consulta=$connection->prepare("SELECT * FROM `portafolio`");
//ejecutar sentencia sql select
$consulta->execute();

/**declarar lista_usuario foreach 
 * fetchAll() devuelve un array contodas las filas
 * de un conjunto de resultados.
 * FETCH_ASSOC devuelve un array indexado por
 *  los nombres de las columnas de un conjunto de resultados */
$lista_portafolio=$consulta->fetchAll(PDO::FETCH_ASSOC);
//incluye el archivo header que se encuentra en directorio templates
include("../../templates/header.php");?>

    <div class="card-header bg-secondary py-3">
        <h6 class="text-center text-light">ImpulsaDigital Proyectos</h6>
        <a name="" id="" class="btn btn-success" href="crear.php" role="button">Agregar Proyecto</a>  
    </div>
    <div class="card-body bg-light">
       
     <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Subtitulo</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Gestionar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_portafolio as $registros){ ?>
                <tr class="">
                    <td scope="col"><?php echo $registros['id']; ?></td>
                    <td scope="col"><?php echo $registros['titulo']; ?></td>
                    <td scope="col"><?php echo $registros['subtitulo']; ?></td>
                    <td scope="col"><img width="50" src="../../../assets/img/portfolio/<?php echo $registros['imagen_portafolio']; ?>"/>
                    <td scope="col"><h6><?php echo $registros['descripcion']; ?></h6></td>
                    <td scope="col"><?php echo $registros['cliente']; ?></td>
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
    <div class="card-footer text-muted py-4 bg-secondary">
   
            <div class="container"><p class="m-0 text-center text-white">Copyright ImpulsaDigital &copy; Your Website 2025</p></div>
    </div>
<br><?php include("../../templates/footer.php");?>
