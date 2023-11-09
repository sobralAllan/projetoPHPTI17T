<?php
    function somar($num1, $num2){
        $soma = $num1 + $num2;
        return "A soma de $num1 com $num2 é: ".$soma;
    }//fim do método somar

    function subtrair($num1, $num2){
        $subt = $num1 - $num2;
        return "A subtração de $num1 por $num2 é: ".$subt;
    }//fim do método subtrair

    function divisao($num1, $num2){
        if($num2 != 0){
            $divi = "A divisão de $num1 por $num2 é: ".$num1 / $num2;
        }else{
            $divi = "Impossível dividir por zero!!!";
        }//Fim do método
        return $divi;
    }//fim do divisão

    function multiplicacao($num1, $num2){
        $mult = $num1 * $num2;
        return "A multiplicação de $num1 por $num2 é: ".$mult;
    }//fim da multiplicação

    function potencia($num1, $num2){
        return "A potência de $num1 elevado a $num2 é: ".pow($num1,$num2);
    }//fim da potência

    function raiz($num1){
        return "A raiz de $num1 é: ".sqrt($num1);
    }//fim da raiz

    function tabuada($num1){
        $msg = "";
        for($i = 0;$i <= 10; $i++){
            $msg .= "\n$i * $num1 = ".($i * $num1);
        }//fim do for
        return $msg;
    }//fim da tabuada



    
?>