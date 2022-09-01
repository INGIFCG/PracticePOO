<?php

function autload($class)
{
    /* echo $class; */
    $url= str_replace("\\","/",$class.".php");
    echo "<br>";
    /* echo $url; */
    require_once($url);
/*    require_once($class.".php");
   echo "<br>";
   echo $class.".php"; */
}
spl_autoload_register('autload');
?>