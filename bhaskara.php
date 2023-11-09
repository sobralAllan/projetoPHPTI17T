<?php
    function delta($a,$b, $c){
        $delta = pow($b,2)-4*$a*$c;
        return $delta;
    }//fim do método

    function calcularX($a,$b,$c){
        $delta = delta($a,$b,$c);

        if($delta < 0){
            return "Impossível calcular X1 e X2, delta negativo";
        }else{
            $x1 = (-$b - sqrt($delta))/(2*$a);
            $x2 = (-$b + sqrt($delta))/(2*$a);
            return "X1: $x1\n X2: $x2";
        }//fim do if
    }//fim do método
?>