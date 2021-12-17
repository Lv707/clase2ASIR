<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
</head>
<body>
    <h1>Horario</h1>
</body>
<?php

$dia = date("l");
$diahorario = date("N");
$diasemana = date("N");
$hora = date("G");

echo "Hoy es ".date("N")." del ".date("l")."<br>";
echo "Son las ".date("G")."<br>"."<br>";

echo "Horario"."<br>"."<br>";

switch ($diasemana){
    case "1":
        echo "IAW"."<br>";
        echo "Recreo"."<br>";
        echo "SRed"."<br>"."<br>";
        break;

    case "2":
        echo "ASO"."<br>";
        echo "Recreo"."<br>";
        echo "Seguridad"."<br>";
        echo "Empresa"."<br>"."<br>";
        break;

    case "3":
        echo "ASO"."<br>";
        echo "Recreo"."<br>";
        echo "SRed"."<br>"."<br>";
        break;

    case "4":
        echo "BBDD"."<br>";
        echo "Recreo"."<br>";
        echo "Seguridad"."<br>";
        echo "Ingles"."<br>"."<br>";
        break;

    case "5":
        echo "Ingles"."<br>";
        echo "Seguridad"."<br>";
        echo "Recreo"."<br>";
        echo "IAW"."<br>";
        echo "Empresa"."<br>"."<br>";
        break;
}


switch ($diasemana){
    case "1":
        if($hora="8"){
            echo "Ahora hay IAW"."<br>";
        }elseif($hora="11"){
            echo "Ahora hay Recreo"."<br>";
        }elseif($hora="12"){
            echo "Ahora hay SRed"."<br>";
        }else{
            echo "Se han acabado las clases";
        }
        break;

    case "2":
        if($hora="8"){
            echo "Ahora hay ASO"."<br>";
        }elseif($hora="11"){
            echo "Ahora hay Recreo"."<br>";
        }elseif($hora="12"){
            echo "Ahora hay Seguridad"."<br>";
        }elseif($hora="13"){
            echo "Ahora hay Empresa"."<br>";
        }else{
            echo "Se han acabado las clases";
        }
        break;

    case "3":
        if($hora="8"){
            echo "Ahora hay ASO"."<br>";
        }elseif($hora="11"){
            echo "Ahora hay Recreo"."<br>";
        }elseif($hora="12"){
            echo "Ahora hay SRed"."<br>";
        }else{
            echo "Se han acabado las clases";
        }
        break;

    case "4":
        if($hora="8"){
            echo "Ahora hay SSBB"."<br>";
        }elseif($hora="11"){
            echo "Ahora hay Recreo"."<br>";
        }elseif($hora="12"){
            echo "Ahora hay Seguridad"."<br>";
        }elseif($hora="13"){
            echo "Ahora hay Ingles"."<br>";
        }else{
            echo "Se han acabado las clases";
        }
        break;

    case "5":
        if($hora="8"){
            echo "Ahora hay Ingles"."<br>";
        }elseif($hora="9"){
            echo "Ahora hay Seguridad"."<br>";
        }elseif($hora="11"){
            echo "Ahora hay Recreo"."<br>";
        }elseif($hora="12"){
            echo "Ahora hay IAW"."<br>";
        }elseif($hora="13"){
            echo "Ahora hay Empresa"."<br>";
        }else{
            echo "Se han acabado las clases";
        }
        break;

    case "6":
        echo "Es fin de semana y hoy es ".$dia."<br>";
        break;
    
    case "7":
        echo "Es fin de semana y hoy es ".$dia."<br>";
        break;    
}

?>
<a href="Página de clase de ASIR (4-10-21)">Volver a la página principal</a>
</html>