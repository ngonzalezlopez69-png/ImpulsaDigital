<?php

include("../../bd.php");

if(isset($_GET['txtId'])){
  //Recuperar los datos del ID correspondinte
  $txtId=(isset($_GET['txtId']))?$_GET['txtId']:"";
  $consulta=$connection->prepare("SELECT * FROM detalle_pago WHERE id=:id");
  $consulta->bindParam(":id",$txtId);
  $consulta->execute();
  $registro=$consulta->fetch(PDO::FETCH_LAZY);

  $rut_cliente=$registro['rut_cliente'];
  $numero_cuenta=$registro['numero_cuenta'];
  $monto=$registro['monto'];
  $cuenta_tranfer=$registro['cuenta_tranfer'];
  $tipo_cuenta=$registro['tipo_cuenta'];
  $banco=$registro['banco'];
  $estado=$registro['estado'];
  

}
if($_POST){
  //imprimir los datos que se estan enviando
  //print_r($_POST);

    //recibir los valores del formulario
    $rut_cliente=(isset($_POST['rut_cliente']))?$_POST['rut_cliente']:"";
    $numero_cuenta=(isset($_POST['numero_cuenta']))?$_POST['numero_cuenta']:"";
    $monto=(isset($_POST['monto']))?$_POST['monto']:"";
    $cuenta_tranfer=(isset($_POST['cuenta_tranfer']))?$_POST['cuenta_tranfer']:"";
    $tipo_cuenta=(isset($_POST['tipo_cuenta']))?$_POST['tipo_cuenta']:"";
    $banco=(isset($_POST['banco']))?$_POST['banco']:"";
    $estado=(isset($_POST['estado']))?$_POST['estado']:"";
//preparar consulta Actualizar Usuario
    $consulta=$connection->prepare("UPDATE detalle_pago
    SET
    rut_cliente=:rut_cliente,
    numero_cuenta=:numero_cuenta,
    monto=:monto,
    cuenta_tranfer=:cuenta_tranfer,
    tipo_cuenta=:tipo_cuenta,
    banco=:banco,
    estado=:estado
    WHERE id=:id");
    
    //bindear los parametros
     $consulta->bindParam(":rut_cliente",$rut_cliente);
     $consulta->bindParam(":numero_cuenta",$numero_cuenta);
     $consulta->bindParam(":monto",$monto);
     $consulta->bindParam(":cuenta_tranfer",$cuenta_tranfer);
     $consulta->bindParam(":tipo_cuenta",$tipo_cuenta); 
     $consulta->bindParam(":banco",$banco);
     $consulta->bindParam(":estado",$estado);
     
     $consulta->bindParam(":id",$txtId);
    //ejecutar la consulta
     $consulta->execute();
     //enviar mensaje
     $mensaje="Registro modificado con exito.";
     //redireccionar al index usuarios del modulo administracion
     header("Location:index.php?mensaje=".$mensaje);

}
//incluir archivo header.php que esta en el directorio templates
include("../../templates/header.php");?>

<div class="card">
    <div class="card-header bg-secondary text-center text-light">
        Editar la informacion del Usuario
    </div>
    <div class="card-body">
        
    <form action=""enctype="multipart/form-data"type method="post">

    <div class="mb-3">
      <label for="txtId" class="form-label">ID:</label>
      <input readonly value="<?php echo $txtId;?>" type="text"
        class="form-control" name="txtId" id="txtId" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="rut_cliente" class="form-label">Rut</label>
      <input value="<?php echo $rut_cliente;?>"type="text"
        class="form-control" name="rut_cliente" id="rut_cliente" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="numero_cuenta" class="form-label">Cuenta</label>
      <input value="<?php echo $numero_cuenta;?>"type="text"
        class="form-control" name="numero_cuenta" id="numero_cuenta" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="monto" class="form-label">Monto</label>
      <input value="<?php echo $monto;?>"type="text"
        class="form-control" name="monto" id="monto" aria-describedby="helpId" placeholder="">
    </div>


    <div class="mb-3">
      <label for="cuenta_tranfer" class="form-label">C transfer</label>
      <input value="<?php echo $cuenta_tranfer;?>"type="text"
        class="form-control" name="cuenta_tranfer" id="cuenta_tranfer" aria-describedby="helpId" placeholder="">
    </div>
    

  <div class="mb-3">
    <label for="tipo_cuenta" class="form-label">Cuenta</label>
    <input value="<?php echo $tipo_cuenta;?>"type="text"
      class="form-control" name="tipo_cuenta" id="tipo_cuenta" aria-describedby="helpId" placeholder="">
  </div>

  <div class="mb-3">
    <label for="banco" class="form-label">Banco</label>
    <input value="<?php echo $banco;?>" type="text"
      class="form-control" name="banco" id="banco" aria-describedby="helpId" placeholder="">
  </div>
  
  <div class="mb-3">
      <label for="estado" class="form-label">Estado</label>
      <input value="<?php echo $estado;?>"type="text"
        class="form-control" name="estado" id="estado" aria-describedby="helpId" placeholder="">
    </div>

  <button type="submit" class="btn btn-success">Actualizar</button>

  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

</form>

</div>

    <div class="card-footer text-muted">
        
    </div>
</div>
<!--incluir archivo footer.php que esta en el directorio templates
<?php include("../../templates/footer.php");?>