<?php
require_once("upload.php");

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
?>