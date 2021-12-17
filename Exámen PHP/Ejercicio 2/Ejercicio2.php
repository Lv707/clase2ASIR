<?php

$input = $_POST["txt1"];
$palabra = $_POST["txt12"];
$modificar = $_POST["txt123"];
$busca = $_POST["txt12"];
$Opcion = $_POST["Selectores"];

#Convierte el texto a Mayúsculas
function Mayuscula($input) {
    $res = strtoupper($input);
    print $res;
}

#Desordena el texto introducido
function Desordena($input) {
    $res = str_shuffle($input);
    print $res;
}


#Convierte el texto en un array
function txtArray($input) {
    $res = str_split($input);
    print_r($res);
}

#Cuenta el número de caractéres
function contarcc($input) {
    $res = strlen($input);
    print $res;
}

#Reemplazar palabra
function reemplazar($modificar,$palabra,$input) {
    $res = str_replace($modificar,$palabra,$input);
    if ( $res = TRUE ) {
        print $res;
    }
    else {
        print 'No está';
    }
}

#Opciones
switch($Opcion) {
    case 'Mayúsculas':
        Mayuscula($input);
        break;
    case 'Desordena':
        Desordena($input);
        break;
    case 'array':
        txtArray($input);
        break;
    case 'Cuenta':
        contarcc($input);
        break;
    case 'Reemplazar':
        reemplazar($modificar,$palabra,$input);
        break;
    default:
    break;
}
?>