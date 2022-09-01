<?php

function autload($class)
{
   require_once($class.".php");
   echo "<br>";
   echo $class.".php";
}
spl_autoload_register('autload');
?>