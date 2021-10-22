<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php

    $numero1 = $_POST["Numero1"];
    $numero2 = $_POST["Numero2"];
    $operador = $_POST["operador"];

    #Sumar
    function sumar($numero1,$numero2) {
        $res = $numero1 + $numero2;
        print "El resultado es ".$res."<br>";
    }

    #Restar
    function restar($numero1,$numero2) {
        $res = $numero1 - $numero2;
        print "El resultado es ".$res."<br>";
    }

    #Multiplicar
    function multiplicar($numero1,$numero2) {
        $res = $numero1 * $numero2;
        print "El resultado es ".$res."<br>";
    }

    #Dividir
    function dividir($numero1,$numero2) {
        $res = $numero1 / $numero2;
        print "El resultado es ".$res."<br>";
    }

    #Raíz cuadrada
    function raíz($numero1) {
        $res = sqrt($numero1);
        print "El resultado es ".$res."<br>";
    }

    #Elevado a 2
    $exponente = 2;
    function cuadrado($numero1,$exponente) {
        $res = pow($numero1,$exponente);
        print "El resultado es ".$res."<br>";
    }

    #Elevado a 3
    $exponente = 3;
    function cubo($numero1,$exponente) {
        $res = pow($numero1,$exponente);
        print "El resultado es ".$res."<br>";
    }

    #Elevado a cualquier exponente
    function elevar($numero1,$numero2) {
        $res = pow($numero1,$numero2);
        print "El resultado es ".$res."<br>";
    }

    #Fibonacci
    function fibonacci($numero1) {
        print "El resultado es ".$res."<br>";
    }

    #Operaciones
    switch($operador) {
        case '+':
            sumar($numero1,$numero2);
            break;
        case '-':
            restar($numero1,$numero2);
            break;
        case 'X':
            multiplicar($numero1,$numero2);
            break;      
        case '/':
            dividir($numero1,$numero2);
            break;
    }
    ?>

</body>
</html>