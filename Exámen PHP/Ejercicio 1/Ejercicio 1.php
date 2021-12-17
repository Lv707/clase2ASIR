<?php
#Variables
$Numero = $_POST["Numero"];
$Opcion2 = $_POST["Opcion2"];
$Opcion = $_POST["Selectores"];

#Número aleatorio (0 - 2048)
if ($Opcion2 = "Sí") {
    echo rand(0,2048)."<br>";    
} else {
    echo "";
}

#Funciones
#Decimal a Binario
function DecaBin($Numero) {
    $res = decbin($Numero);
    print $res;
}

#Decimal a Octavo
function DecaOct($Numero) {
    $res = decoct($Numero);
    print $res;
}

#Decimal a Hexadecimal
function DecaHex($Numero) {
    $res = dechex($Numero);
    print $res;
}


#Binario a Decimal
function BinaDec($Numero) {
    $res = bindec($Numero);
    print $res;
}

#Octal a Decimal
function OctaDec($Numero) {
    $res = octdec($Numero);
    print $res;
}

#Hexadecimal a Decimal
function HexaDec($Numero) {
    $res = hexdec($Numero);
    print $res;
}

#Swich
switch ($Opcion) {
    case 'Binario':
        DecaBin($Numero);
        break;
    case 'Octal':
        DecaHex($Numero);
        break;
    case 'Hexadecimal':
        DecaHex($Numero);
        break;
    case 'BinarioDecimal':
        BinaDec($Numero);
        break;
    case 'OctalDecimal':
        OctaDec($Numero);
        break;
    case 'HexadecimalDecimal':
        HexaDec($Numero);
        break;
    default:
        break;
}
?>