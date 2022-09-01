<?php

class Conexion{

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db  = 'test';
    private $conect;

    public function __construct(){
        $conexionbd = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->conect= new PDO($conexionbd,$this->user,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Conexion exitosa";
        }catch(Exception $e){

            $this-> conect ="Error de conexion";
            echo "error: ". $e->getMessage();
        }
    }
}
$conect= new Conexion();
