<?php

require_once("Class_empleado.php");
require_once("Class_cliente.php");


$objEmpleado = new empleado("calos","gonzalez","carlosgonzalez@gmail.com","1234carlos*","urb simon bolivar","0480515431");
$objEmpleado->setPuesto("Ingeniero");//Seters de clase puesto
$objCliente = new cliente("anais","elculote","anabellaculona@gmail.com","elpepe1234","urb simon el tigre",rand());
$objCliente->setCredito(1415.505110);//seters de clase credito



echo $objEmpleado ->getdata(); // getters
echo $objEmpleado ->getPuesto();

"<br>";
echo $objCliente ->getdata();
echo $objCliente ->getCredito();


?>
