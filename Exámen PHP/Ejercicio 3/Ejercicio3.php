<?php
#Variables
$Texto1 = $_POST["txt1"];
$Texto2 = $_POST["txt2"];
$Texto3 = $_POST["txt3"];
$Texto4 = $_POST["txt4"];
$Texto5 = $_POST["txt5"];

$Opcion = $_POST["Selectores"];

$Ejercicio = array("$Texto1","$Texto2","$Texto3","$Texto4","$Texto5");

#Funciones
#Quitar el primer elemento de array
function QuitarPrimer($Ejercicio) {
    unset($Ejercicio[0]);
    print_r($Ejercicio);
}


#Quitar el ultimo elemento de array
function QuitarUltimo($Ejercicio) {
    unset($Ejercicio[4]);
    print_r($Ejercicio);
}


#Ordena el array por sus claves en orden inverso
function OrdenarInvertido($Ejercicio) {
    array_reverse($Ejercicio);
    print_r($Ejercicio);
}

#Divide el array en 2 fragmentos
function Dividir($Ejercicio) {
    $res = array_chunk($Ejercicio,2);
    print_r($res);
}

#Swich
switch ($Opcion) {
    case 'QuitarPrimerElemento':
        QuitarPrimer($Ejercicio);
        break;
    case 'QuitarUltimoElemento':
        QuitarUltimo($Ejercicio);
        break;
    case 'OrdenarInverso':
        OrdenarInvertido($Ejercicio);
        break;
    case 'Dividir':
        Dividir($Ejercicio);
        break;
    default:
        break;
}
?>