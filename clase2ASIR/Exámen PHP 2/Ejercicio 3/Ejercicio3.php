<?php
#Variables
$Texto = $_POST['texto'];

#Palíndroma
$mayusculas = strtoupper($Texto);
if ($texto = $mayusculas){
    function Palíndroma($Texto){
        $invertir = strrev($texto);
        $letras = str_split($invertir);
        if ($invertir = $letras){
            echo 'El texto introducido: '.$Texto.' es palíndromo.';
        } else {
            echo 'El texto introducido: '.$Texto.' NO es palíndromo.';
        }
    }
}
?>