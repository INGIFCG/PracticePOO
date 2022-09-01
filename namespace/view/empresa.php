<?php

/* require_once("../controllers/cliente.php");
require_once("../controllers/empleado.php"); */
require_once("../autoload.php");
use controllers\cliente;
use controllers\empleado;


$objEmpleado = new empleado("calos","gonzalez","carlosgonzalez@gmail.com","1234carlos*","urb simon bolivar","0480515431");
$objEmpleado->setPuesto("Ingeniero");//Seters de clase puesto
/* $objEmpleado->getMensaje("Bienvenido Empleado");//Seters de clase puesto */

echo "<hr>";
echo "<br>";
echo $objEmpleado ->getdata(); // getters
echo $objEmpleado ->getPuesto();

echo "<hr>";
echo "<br>";
echo "<br>";

$objCliente = new cliente("anais","elculote","anabellaculona@gmail.com","elpepe1234","urb simon el tigre",rand());
$objCliente->setCredito(1415.505110);//seters de clase credito
/* $objCliente->getMensaje("Bienvenido Cliente");//Seters de clase puesto */
echo "<hr>";
echo "<br>";
echo "<br>";
echo $objCliente ->getdata();
echo $objCliente ->getCredito();


?>
