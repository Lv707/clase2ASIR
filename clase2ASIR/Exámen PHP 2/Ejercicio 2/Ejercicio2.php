<?php
#Variables
$Coord_A_X = $_POST['CoordenadaA_X'];
$Coord_A_Y = $_POST['CoordenadaA_Y'];
$Coord_B_X = $_POST['CoordenadaB_X'];
$Coord_B_Y = $_POST['CoordenadaB_Y'];

#Funcion
function Distancia($Coord_A_X,$Coord_A_Y,$Coord_B_X,$Coord_B_Y){
    $resta1 = $Coord_A_X - $Coord_A_Y;
    $resta2 = $Coord_A_X - $Coord_A_Y;

    $cuadrado1 = pow($resta1,2);
    $cuadrado2 = pow($resta2,2);

    $suma = $cuadrado1 + $cuadrado2;

    $res = sqrt($suma);
    
    echo 'Distancia entre el punto A('.$Coord_A_X.','.$Coord_A_Y.') y el punto B('.$Coord_B_X.','.$Coord_B_Y.') es: ';
}
?>