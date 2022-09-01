<?php
//Las interfaces nos sirve par adefinir los metodos que se utilizaran en algun a clase los cuales seran
//de tipo publico

interface operaciones{
    public function raizCuadrada(float $numero):float;
    public function potencia(int $numero, int $potencia):int;
    public function operacionesB(int $numero1, int $numero2, string $stroperacion);

}//end operacion
