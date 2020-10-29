<?php

function SeculoAno($ano){

    if ( $ano <= 0 ){
        return "Ano inexistente!";
    } else {
        $ano = str_pad($ano , 4 , '0' , STR_PAD_LEFT);
        $inicial = substr($ano,0,2);
        $final = substr($ano,2,2);

        if ( $inicial == '00' ) {
            $seculo = 1;        
        } elseif ( $final == '00') {
            $seculo = $inicial;
        } else {
            $seculo = $inicial + 1;
        }

        return intval($seculo);
    }
}

echo "<br>O século é: ".SeculoAno(2020);
?>
