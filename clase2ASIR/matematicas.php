<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas</title>
</head>
<body>

<?php

echo "Ejemplo de bucle while"."<br>"."<br>";

$numero = 0;

while ($numero <= 10) {
    # Paso 1: Mostrar mi número
    echo "Mi número es: ".$numero."<br>";
    # Paso 2: Actualizar la variable número
    # $numero++;
    # $numero=$numero+1;
    $numero++;
}

echo "Ejemplo de bucle while"."<br>"."<br>";

$numero1 = 0;
$aleatorio = rand(0,100);

while ($numero1 <= $aleatorio) {
    # Paso 1: Mostrar mi número
    echo "Mi número aleatorio es: ".$aleatorio."<br>";
    echo "Mi número es: ".$numero1."<br>";
    # Paso 2: Actualizar la variable número
    # $numero++;   = $numero=$numero+1;
    # $numero1=$numero+5;
    # $numero++
    $numero1++;
}

echo "Mi cuenta ha terminado. "."<br>";


echo "<br>"."Ejemplo de for"."<br>";

for ($cuenta = 0; $cuenta < 10; $cuenta++) {
    # Acción
    print "Imprime la cuenta: ".$cuenta."<br>";
}


$nombre = "Miguel";
$edad = 25;
$esMayor=true;

#función presentación

function presenta($nombre,$apellidos,$localidad){
    echo "Mi nombre es: ".$nombre." ".$apellidos." y soy de ".$localidad."<br>";
}

presenta("Miguel","Oreo","Sevilla");

function persona($nombre,$edad){
    echo "Su nombre es: ".$nombre;
    if ($edad % 2==0) {
        echo " su edad es par";
    }else{
        echo " su edad es impar";
    }
}

persona("Nacho",25)."<br>";
persona("Gonzalo",25)."<br>";
persona("Javi",25)."<br>";
echo "<br>"."<br>";

$alumnos = array("Nacho","Gonzalo","Javi");

echo count($alumnos)."<br>";

$selectAleatorio = rand(0,3);

echo "El alumno es: ".$alumnos[$selectAleatorio];
?>
    
</body>
<a href="inicio.html">Volver a la página principal</a>
</html>