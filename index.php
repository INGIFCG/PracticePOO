<?php

require_once("Config/config.php");
require_once("Controllers/Home.php");

//validacion de url 
$url = !empty($_GET['url']) ? $_GET['url'] : "home/home";
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";

if (!empty($arrUrl[1])) { //validador de metodos

    if ($arrUrl[1] != "") {
        $method = $arrUrl[1];
    }
}

if (!empty($arrUrl[2])) { //validador de parametros
    if ($arrUrl[2] != "") {
        for ($i = 2; $i < count($arrUrl); $i++) {
            $params .= $arrUrl[$i] . ',';
        }

        $param = trim($param, ",");
        echo $params;
    }
}
//autoload
spl_autoload_register(function ($class) {
    if (file_exists(LIBS . 'Core/' . $class . ".php")) {
        require_once(LIBS . 'Core/' . $class . ".php");
    }
});
//Load
$controllerFile = "Controllers/" . $controller . ".php";
if (file_exists($controllerFile)) {

    require_once($controllerFile);
    $controller = new $controller();
    if (method_exists($controller, $method)) {
        $controller->{$method}($params);
    } else {
        echo 'No existe el  Metodo';
    }
} else {
    echo 'No existe controlador';
} 
/* echo "<br>";
print_r($arrUrl);

echo "<br>";
echo "Controlador ";
print_r($controller);
echo "<br>";
echo "Metodo: ".$method;
echo "<br>";
echo "parametros ".$params; */
