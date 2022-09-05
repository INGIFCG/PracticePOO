<?php

require_once("autoload.php");
class Usuario extends Conexion
{

    private $strnombre;
    private $intTelefono;
    private $strEmail;
    private $conexion;

    public function __construct()
    {

        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function insertarDatos(string $usuario, int $telefono, string $email)
    {
        $this->strnombre = $usuario;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;

        $sql = "INSERT INTO usuario(nombre,telefono,email) VALUES(?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrData = array($this->strnombre, $this->intTelefono, $this->strEmail);
        $resInsert = $insert->execute($arrData);
        $idInsert = $this->conexion->lastInsertId();
        return $idInsert;
    }
    public function getUsuarios()
    {
        $sql = "SELECT *FROM usuario";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchAll(PDO::FETCH_ASSOC);
        return $request;
    }
    public function updateDatos(int $id, string $usuario, int $telefono, string $email)
    {
        $this->strnombre = $usuario;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;

        $sql = "UPDATE usuario SET nombre=?,telefono=?,email=? WHERE id=$id";
        $update = $this->conexion->prepare($sql);
        $arrData = array($this->strnombre, $this->intTelefono, $this->strEmail);
        $resUpdate = $update->execute($arrData);
        return $resUpdate;
    }

    public function selectData(int $id)
    {

        $sql = "SELECT *from WHERE id=? ";
        $arrWhere = array($id);
        $query = $this->conexion->prepare($sql);
        $query->execute($arrWhere);
        $request = $query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }
    public function deleteData(int $id)
    {
        $sql = "DELETE from usuario WHERE id=? ";
        $arrWhere = array($id);
        $delete = $this->conexion->prepare($sql);
        $del=$delete->execute($arrWhere);
        return $del;
    }
}
