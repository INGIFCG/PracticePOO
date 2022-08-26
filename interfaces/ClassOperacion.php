<?php

require_once("interface.php");
/* require_once("operacionesBasicas.php"); */ // tambien se puede colocar varias interfaces 

class calcular implements operacion,operacionBsc{ // y se declaran de esta manera

    public function raizCuadrada(float $numero):float{

        $total= sqrt($numero);
        return $total;
    }
    
    public function potencia(int $numero, int $potencia):int{

        $total= pow($numero,$potencia);
        return $total;
    }

    public function operacionesB(int $numero1, int $numero2, string $operacion){

        if($operacion=="+"){
            $result=  $numero1 + $numero2;
        }else if($operacion=="-"){
            $result= $numero1 - $numero2;
        }else if($operacion=="*"){
            $result= $numero1 * $numero2;
        }else if($operacion=="/"){
            $result= $numero1 / $numero2;
        }else{
            $result= "El operador colocado es incorrecto";
        }                
        return $result;
    }

}
