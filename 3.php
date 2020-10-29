<?php

function CalculaArea($n){

    if ( $n == 1){
        return 1;
    } else {
        return (($n-1)*4)  + CalculaArea($n-1);
    }

}

echo CalculaArea(7);

?>
