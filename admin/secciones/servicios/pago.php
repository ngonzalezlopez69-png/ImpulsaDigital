<!-- Esta vista esta actualmente en desarrollo
  De momento solo lectura idea para realizar pagos 18-08-2025 Ngonzalez-->

<!-- Esta vista esta actualmente en desarrollo
  De momento solo lectura idea para realizar pagos 18-08-2025 Ngonzalez-->
<?php 

include("../../bd.php");

if($_POST){
    //recepcionamos los valores del formulario
    $rut_cliente=(isset($_POST['rut_cliente']))?$_POST['rut_cliente']:"";
    $numero_cuenta=(isset($_POST['numero_cuenta']))?$_POST['numero_cuenta']:"";
    $monto=(isset($_POST['monto']))?$_POST['monto']:"";
    $cuenta_tranfer=(isset($_POST['cuenta_tranfer']))?$_POST['cuenta_tranfer']:"";
    $tipo_cuenta=(isset($_POST['tipo_cuenta']))?$_POST['tipo_cuenta']:"";
    $banco=(isset($_POST['banco']))?$_POST['banco']:"";

    //Prepara la consulta insertar datos en la tabla detalle
    $consulta=$connection->prepare("INSERT INTO `detalle_pago` (`id`, `rut_cliente`, `numero_cuenta`,`monto`, `cuenta_tranfer`,`tipo_cuenta`, `banco`) 
    VALUES (NULL, :rut_cliente, :numero_cuenta,:monto, :cuenta_tranfer, :tipo_cuenta, :banco);");
    

     $consulta->bindParam(":rut_cliente",$rut_cliente);
     $consulta->bindParam(":numero_cuenta",$numero_cuenta);
     $consulta->bindParam(":monto",$monto);
     $consulta->bindParam(":cuenta_tranfer",$cuenta_tranfer);
     $consulta->bindParam(":tipo_cuenta",$tipo_cuenta); 
     $consulta->bindParam(":banco",$banco);

    $consulta->execute();
    $mensaje="Registro agregado con exito.";
    header("Location:carrito/success.php?mensaje=".$mensaje);

}

include("../../templates/headerNormal.php");
?>
<div class="container col-md-6">
<div class="card bg-secondary">
<div class="card-header bg-secondary text-light text-center text-uppercase fw-bold mb-2">
<h4><strong>Banco banco_santander</strong></h4>
<h5 class="text-capitalize"><strong>Ingrese los datos a continuación</strong></h5>
  </div>
  <div class="card-body">
  <form action="" method="post">
  <div class="form-group text-light"> 
  <div class="form-group">
  <label for="rut_cliente" class="form-label">Rut Cliente</label>
  <input class="form-control" type="text" id="rut_cliente" name="rut_cliente" placeholder="Ingrese Rut Cliente"required>
  </div>
   <div class="form-group">
  <label for="numero_cuenta" class="form-label">Numero Cuenta</label>
  <input class="form-control" type="text" id="numero_cuenta" name="numero_cuenta" placeholder="Ingrese Numero de cuenta"required>
  </div>
  <div class="form-group">
  <label for="monto" class="form-label">Monto Transferencia</label>
  <input class="form-control" type="text" id="monto" name="monto" placeholder="Ingrese Monto transferencia"required>
  </div>
   <div class="form-group">
  <label for="cuenta_tranfer" class="form-label">Cuenta Transferencia</label>
  <input class="form-control" type="text" id="cuenta_tranfer" name="cuenta_tranfer" placeholder="Ingrese Cuenta transferencia"required>
  </div>
   <div class="form-group">
    <label for="tipo_cuenta" class="label">Tipo de Cuenta</label>
    <div class="form-control form-control-lg">
     <div class="select">
       <select name="tipo_cuenta"required>
       <option value="cuenta">Seleccione tipo de Cuenta</option>
           <option value="cuenta_corriente">Cuenta Corriente</option>
              <option value="cuenta_vista">Cuenta Vista</option>
                  <option value="cuenta_ahorro">Cuenta de Ahorro</option>
                  </select>
             </div>
         </div>
   </div> 
   <div class="form-group">
   <label for="banco" class="label">Seleccione Banco</label>
   <div class="form-control form-control-lg">
   <div class="select">
    <select name="banco"required>
    <option value="banco">Seleccione Banco</option>
        <option value="banco_estado">Banco Estado</option>
          <option value="banco_santander">Banco Santander</option>
           <option value="banco_chile">Banco Chile</option>
            <option value="banco_bci">Banco BCI</option>
         </select>
     </div>
       </div>
          </div><br>
          <div class="text-center">
     <button class="btn btn-success btn-block" type="submit">Realizar Pago</button>
    <a class="btn btn-block text-center text-light bg-danger " type="button" href="carrito/cart.php">&nbsp;&nbsp;&nbsp;&nbsp;Cancelar operación&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
    </form>
    </div>
    </div>
   </div>  