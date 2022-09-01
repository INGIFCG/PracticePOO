<?php
require_once("autoload.php");


$objUsuario = new usuario();/* 
$insert = $objUsuario->insertarDatos("pedro",78484571,"gonzalez1234@gmail.com");
echo $insert; */
$user =  $objUsuario->getUsuarios();
echo "<pre>";
print_r($user);
echo "</pre>";
?>