<?php
echo date("Y")."<br>";
echo date("d M Y")."<br>";
echo date("d/m/Y")."<br>";
echo date("d/m/y h:i:s")."<br>";

//Zonas UTC//

echo "Estoy en la zona de :" .date_default_timezone_get()."<br>";
echo "Fecha: ".strftime("%A, %d de %B del %Y - %H:%M:%S")."<br>";

echo "<br>";

date_default_timezone_set("Europe/London")."<br>";
echo "Estoy en la zona de :" .date_default_timezone_get()."<br>";
echo "Fecha: ".strftime("%A, %d de %B del %Y - %H:%M:%S")."<br>";

// 07/02/2022 09:00:00 //
$fechita = mktime("09","00","00","02","07","2022")."<br>";
//$fechita = mktime(9,0,0,2,7,2022)."<br>";
echo $fechita."<br>";
echo date("d/m/y h:i:s",$fechita)."<br>";

/*
1 minuto = 60 segundos
1 hora = 60*60 = 3600 segundos
1 dia = 24*3600 = 86400 segundos
*/

//Suma 1 dia y 2 horas

$fechita = $fechita + 86400 + 7200;
echo date("d/m/y h:i:s",$fechita)."<br>";

//Diferencias entre 2 horas
$fecha1 = mktime(9,0,0,2,7,2022);
$fecha2 = mktime(12,0,0,2,7,2022);

$diff = $fecha2 - $fecha1;
$minutos = $diff/60;
$horas = $diff/3600;
$dias = $diff/86400;

echo $minutos."<br>";
echo $horas."<br>";
echo $dias."<br>";

echo date("d/m/y h:i:s",$diff)."<br>";
?>