<?php

// Configuración de base de datos de ejemplo
// Copia este archivo como bd.php y configura tus credenciales

$server="localhost";
$dbname="nombre_de_tu_base_de_datos";
$user="tu_usuario";
$password="tu_contraseña";

try{

    $connection=new PDO("mysql:host=$server;dbname=$dbname",$user,$password);
    //echo "Conectado con exito ImpulsaDigital";

   }catch(Exception $error) {

          echo $error->getMessage();
   }

?>