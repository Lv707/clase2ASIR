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
    $exponente1 = 2;
    function cuadrado($numero1,$exponente) {
        $res = pow($numero1,2);
        print "El resultado es ".$res."<br>";
    }

    #Elevado a 3
    $exponente2 = 3;
    function cubo($numero1,$exponente) {
        $res = pow($numero1,3);
        print "El resultado es ".$res."<br>";
    }

    #Elevado a cualquier exponente
    function elevar($numero1,$numero2) {
        $res = pow($numero1,$numero2);
        print "El resultado es ".$res."<br>";
    }

    #Fibonacci
    function fibonacci($numero1) {
    $num1 = 0;
    $num2 = 1;
    $contador = 0;

    while ($contador < $numero1 ) {
    print " ".$num1;
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    $contador = $contador + 1;
    }
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
        case 'Raíz 2':
            raíz($numero1);
            break;
        case 'x^2':
            cuadrado($numero1,$exponente1);
            break;
        case 'x^3':
            cubo($numero1,$exponente2);
            break;
        case 'x^x':
            elevar($numero1,$numero2);
            break;
        case 'Fibonacci':
            fibonacci($numero1);
            break;
        default:
        break;
    }
    ?>
</body>
</html>