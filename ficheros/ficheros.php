<?php

$datosrecogidos = $_GET["elegir"];

echo readfile("pruebafichero.txt");
echo "<br>";

echo filesize("pruebafichero.txt");
echo "<br>";
echo "<br>";


/*if(fichero si no)

echo $inforecogida representa en web

escribe en el fichero

Se ha guardado en el fichero*/

if ($datosrecogidos = 'Sí') {
    $fichero = fopen("pruebafichero.txt","r") or die ("Fallo al abrir el fichero");

    fwrite($fichero,$datosrecogidos);

    fclose($fichero);
} else {
    $fichero = fopen("pruebafichero.txt","r") or die ("Fallo al abrir el fichero");

    echo fread($fichero,$pesofichero);

    fclose($fichero);
}





//APERTURA Y LECTURA DE UN FICHERO

//ABRO EL FICHERO EN UNA DIR DE MEMORIA
$fichero = fopen("pruebafichero.txt","r") or die ("Fallo al abrir el fichero");

//OBTENGO EL TAMAÑO DEL FICHERO
$pesofichero = filesize("pruebafichero.txt");

//REPRESENTO POR PANTALLA EL CONTENIDO, le doy el recurso $fichero y su peso $pesofichero
echo fread($fichero,$pesofichero);

//Una vez he terminado de representarlo cierro el recurso
fclose($fichero);
echo "<br>";


//Escribir

$fichero = fopen("pruebafichero.txt","w") or die ("Fallo al abrir el fichero");

$muevotexto = "as";
$muevotexto2 = $datosrecogidos;
fwrite($fichero,$muevotexto);

fclose($fichero);

?>