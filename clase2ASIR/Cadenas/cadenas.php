<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $input=$_GET["texto 1"];
    $palabra=$_GET["texto 2"];
    $modificar=$_GET["texto 3"];
    $busca=$_GET["texto 2"];
    $opciones=$_GET["opciones"];

    #Cuenta carácteres
    function contarcc($input) {
        $res = strlen($input);
        if ( $res = TRUE ) {
            echo $res;
        }
        else {
            echo 'No está'
        }
    }

    #Cuenta palabras
    function contarpp($input) {
        $res = str_word_count($input);
        if ( $res = TRUE ) {
            echo $res;
        }
        else {
            echo 'No está'
        }
    }
    #Invierte texto
    function invertir($input) {
        $res = strrev($input);
        if ( $res = TRUE ) {
            echo $res;
        }
        else {
            echo 'No está'
        }
    }

    #Búsqueda
    function buscar($input,$busca) {
        $res = strpos($input,$busca);
        if ( $res = TRUE ) {
            echo $res;
        }
        else {
            echo 'No está'
        }
    }

    #Reemplazar palabras
    function reemplazar($modificar,$palabra,$input) {
        $res = str_replace($modificar,$palabra,$input);
        if ( $res = TRUE ) {
            echo $res;
        }
        else {
            echo 'No está'
        }
    }

    #Opciones
    switch($opciones) {
        case 'Cuenta caracteres':
            contarcc($input);
            break;
        case 'Cuenta caracteres':
            contarpp($input);
            break;
        case 'Cuenta caracteres':
            invertir($input);
            break;
        case 'Cuenta caracteres':
            buscar($input,$busca);
            break;
        case 'Cuenta caracteres':
            reemplazar($modificar,$palabra,$input);
            break;
    }
    ?>
</body>
</html>