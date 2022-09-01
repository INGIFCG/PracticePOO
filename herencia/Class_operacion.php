<?php

class operacion
{

    //propiedades de la clase
    public $cantidad1 = 0;
    public $cantidad2 = 0;
    public $resultado = 0;

    //constructor
    function __construct($intCant1, $intCant2) 
    {

        $this->cantidad1 = $intCant1;
        $this->cantidad2 = $intCant2;
    }
    //del constructor nacen los metodos de los cuales se procesara la informacion
    public function getsuma()// geters
    {

        $this->resultado = $this->cantidad1 + $this->cantidad2;
        return $this->resultado; 
    }

    public function getresta()
    {
        $this->resultado = $this->cantidad1 - $this->cantidad2;
        return $this->resultado;
    }

    public function getmulti()
    {
        $this->resultado = $this->cantidad1 * $this->cantidad2;
        return $this->resultado;
    }

    public function getdiv()
    {
        $this->resultado = $this->cantidad1 / $this->cantidad2;
        return $this->resultado;
    }
}

class Usuario
{

    public $name = 'carlos';
    public $midlename = 'Gonzalez';
    public $email = 'carlos@gmail.com';
    private $password = '123456789';
    private $direccion = 'Urb Sb Catia';
    protected $Nphone = '04242222222';

    function __construct(string $sendNomb, string $sendMdlnm, string $sendEmail)
    {

        $this->name = $sendNomb;
        $this->midlename = $sendMdlnm;
        $this->email = $sendEmail;
        /*      $this->name=$sendNomb;
        $this->name=$sendNomb;
        $this->name=$sendNomb; */
    }
    public function getPassword(): string
    {

        return $this->password;
    }
    public function getDireccion(): string
    {

        return $this->direccion;
    }
    public function getTlf(): string
    {

        return $this->Nphone;
    }
}

class persona
{

    public $nombre;
    public $apellido;
    public $correo;
    private $passcon;
    private $direc;
    protected $phone;

    function __construct($nombr, $apelli, $email , $password ,$direction,$phoneN)
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
