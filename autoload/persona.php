<?php
require_once("upload.php");

class persona
{

    public $nombre;
    public $apellido;
    public $correo;
    private $passcon;
    private $direc;
    protected $phone;

    function __construct($nombr, $apelli, $email, $password, $direction, $phoneN)
    {

        $this->nombre = $nombr;
        $this->apellido = $apelli;
        $this->correo = $email;
        $this->passcon = $password;
        $this->direc = $direction;
        $this->phone = $phoneN;
    }
    public function getData()
    {

        $datos = " <h2>Tabla de datos del usuario</h2>
        
                Nombre:{$this->nombre}<br>
                apellido: {$this->apellido}<br>
                correo: {$this->correo}<br>
                passcon: {$this->passcon}<br>
                direc: {$this->direc}<br>
                phone: {$this->phone}<br>";
        return $datos;
    }
}
