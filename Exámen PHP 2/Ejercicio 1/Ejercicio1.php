<?php
#Variables
$Dinero = $_POST["Sueldo"];

#Tabla
switch ($Dinero){
    case $Dinero < 10000:
        $TipoImpositivo = 0.05;
        break;
    case $Dinero < 20000:
        $TipoImpositivo = 0.15;
        break;
    case $Dinero < 35000:
        $TipoImpositivo = 0.2;
        break;
    case $Dinero < 60000:
        $TipoImpositivo = 0.3;
        break;
    case $Dinero > 60000:
        $TipoImpositivo = 0.45;
        break;
    default:
    break;
}

#Sueldo
$Porcentaje = $Dinero*$TipoImpositivo;
echo 'Su tipo impositivo es un '.$TipoImpositivo.'<br>';
echo 'Tienes que pagar '.$Porcentaje.'$';
?>