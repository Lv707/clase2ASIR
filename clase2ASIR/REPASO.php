<?php

include 'constantes.php';
require 'constantes2.php';

echo GRAVEDAD;
resta();


/*
#CONSTANTES

$pi=pi();

echo "Número Pi: ".$pi."<br>";


define("GRAVEDAD",9.8);

echo "Constante de la Gravedad: ".GRAVEDAD;


echo "<br>";


#ARRAYS Y TRATAMIENTO

$numeros= array(2,4,8,7,10,GRAVEDAD);

$cantidad_numeros= count($numeros);

$desordena=shuffle($numeros);


echo "cuenta: ".$cantidad_numeros."<br>";
echo "desordena: ".$desordena."<br>";

print_r($numeros);

echo "<br>";

for ($i=0; $i < $cantidad_numeros; $i++) { 
    echo "VALOR DE ".$i.": ".$numeros[$i]."<br>";
}


echo "<br> for each <br>";
foreach ($numeros as $numerito) {
    echo $numerito."<br>";
}


$provincias =array(
    "Andalucia"=>"Sevilla",
    "Madrid"=>"Madrid",
    "Aragón"=>"Zaragoza",
    "País Vasco"=>"Bilbao",
);

print_r($provincias);

echo "<br/>";

foreach ($provincias as $provincitas => $i) {
    echo "La comunidad autónoma ".$provincitas." su capital es ".$i."<br>";
}


#MODIFICAR EL VALOR DEL ARRAY

$numeros[0]=3;

echo "<br/>";

foreach ($numeros as $numerito) {
    echo $numerito."<br/>";
}


#ELIMINAR EL VALOR DE UN ARRAY

unset($numeros[6]);

echo "<br/>";

foreach ($numeros as $numerito) {
    echo $numerito."<br/>";
}


#ARRAY MULTIDIMENSIONALES

$asir=array(
    array("Nombre"=>"Nacho","Frase"=>"Gusano Morris"),
    array("Nombre"=>"Manule","Frase"=>"Ere"),
    array("Nombre"=>"Kerry","Frase"=>"au")
);

print_r($asir);

echo "<br/>";

foreach ($asir as $alumno) {
    echo "Frase típica: ".$alumno["Frase"]."<br>";
}


#FUNCIONES

$numero1=10;
$numero2=4;

function suma($numero1,$numero2){
    $res = $numero1+$numero2;
    return $res;
}

$sumado=suma($numero1,$numero2);
echo $sumado;

echo "<br/>";

echo GRAVEDAD;

$redon=round(GRAVEDAD);
echo $redon;

/*
#VARIABLES

$A='10';

$B=0;

$C=true;

$D=$_GET["datos1"];
$D=$_POST["datos2"];


#CONDICIONALES

if (CONDICIÓN) {
    # code...
} else {
    # code...
}

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}


#BUCLES

while ($a <= 10) {
    # code...
}

for ($i=0; $i < ; $i++) { 
    # code...
}
*/
?>