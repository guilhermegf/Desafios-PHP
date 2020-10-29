<?php

function Palindromo($str){

   $s1 = str_replace(' ', '', strtolower(tirarAcentos($str)));
   $s2 = str_replace(' ', '', strtolower(strrev(tirarAcentos($str))));

   if ( $s1 == $s2 ) {       
       return true;
   } else {
       return false;
   }
}

function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
}

if ( Palindromo('A grama é amarga') ) {
    echo "É palímdromo!";
} else {
    echo "Não é palímdromo!";
}
?>
