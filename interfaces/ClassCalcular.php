<?php

require_once("ClassOperacion.php");

//raiz cuadrada
echo "Raiz Cuadrada<br>";
echo "<br>";
$objraiz=new calcular();
echo $objraiz->raizCuadrada(25);

//potencia

echo "<br><br>Potencia<br>";
echo "<br>";
$objexpo = new calcular();
echo $objexpo->potencia(10,2);

//operaciones Basicas
echo "<br><br>Operaciones Basicas <br>";
echo "<br>";
$objOperacionesB = new calcular();
echo $objOperacionesB->operacionesB(100,100,"/");
?>