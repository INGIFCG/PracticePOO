<?php
require_once("autoload.php");


$objUsuario = new usuario(); 
/* $insert = $objUsuario->insertarDatos("fatuma",12341,"234@gmail.com");
echo $insert; 
$user =  $objUsuario->getUsuarios();
echo "<pre>";
print_r($user);
echo "</pre>"; */


/* $updateUser =  $objUsuario->updateDatos(2,"Petrolinocoñoemilo",1122334455,"elpetrolinoloco@gmail.com");
echo $updateUser;
*/
$deleteuser= $objUsuario->deleteData(5);
echo $deleteuser; 
?>