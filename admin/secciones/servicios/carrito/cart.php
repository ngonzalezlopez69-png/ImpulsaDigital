<!DOCTYPE html>
<html>
	<head>
		<title>ImpulsaDigital Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>		
	</head>

	<body>
		
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="../../../../index.php#services">Regresar a ImpulsaDigital</a>
				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li><a href="#">Review</a></li>
				<li class="active"><a href="#">Order</a></li>
				<li><a href="#">Payment</a></li>
			</ol>
		</div>
		
		<div class="container text-start">

			<div class="col-md-5 col-sm-12">
				<div class="bigcart"></div>
				<h3>ImpulsaDigital</h3>
				<h2>Shopping cart</h2>
				<p>
					Carrito de compras moderno y adaptable. Funciona perfecto en escritorio y móvil. Prueba redimensionando la ventana o ábrelo desde tu smartphone.
				</p>
			</div>
			
			<div class="col-md-7 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						<span>ID</span>
						<span>ITEM</span>
						<span>PRECIO</span>
					</li>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName">Diseño Solución</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">$1.999.999</span>
					</li>
					<li class="row">
						<span class="quantity">2</span>
						<span class="itemName">Modelo de Datos</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">$949.000</span>
					</li>
					<li class="row">
						<span class="quantity">3</span>
						<span class="itemName">Prototipo</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">$999.999</span>				
					</li>
					<li class="row">
						<span class="quantity">4</span>
						<span class="itemName">Desarrollo</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">$6.300.000</span>
					</li>
					<li class="row">
						<span class="quantity">5</span>
						<span class="itemName">Pruebas</span>
						<span class="popbtn"  data-parent="#asd" data-toggle="collapse" data-target="#demo"><a class="arrow"></a></span>
						<span class="price">$1.613.000</span>				
					</li>
					<li class="row totals">
						<span class="itemName">Total:</span>
						<span class="price">$11.861.000</span>
						
						<span class="order"> <a class="text-center" href="../../../../index.php#services">Cancelar</a></span>
						<span class="order">
						<a class="text-center text-light" type="button"style="background-color: green;" href="../pago.php">&nbsp;&nbsp;&nbsp;Pagar&nbsp;</a></span>
					</li>
				</ul>
			</div>

		</div>

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>

	</body>
</html>