<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numeros = array(1, 2, 3, 4);

    $suspensos = array("Manzana", "Naranja", "Fresa",);

    $coches = array("Ferrari", "Seat", "BMW", "Open");

    echo $suspensos[0].'<br>'.'<br>';
    echo $numeros[3].'<br>'.'<br>';
    echo $coches[2].'<br>'.'<br>';

    $cuentaCoches = count($coches);

    echo "Número de coches ".$cuentaCoches.'<br>'.'<br>';

    $aleatorio = rand(0,3);

    echo "Coche aleatorio: ".$coches[$aleatorio].'<br>'.'<br>';

    $parada = 0;

    while ($parada <= 5) {
        $aleatorio = rand(0,3);
        echo $coches[$aleatorio].'<br>';
        $parada++;
    }

    $cochesOrdenados = sort($coches);

    echo $cochesOrdenados;

    $parada = 0;

    while ($parada < $cuentaCoches-1) {
        $cochesOrdenados = sort($coches);
        echo $cochesOrdenados[$parada].'<br>';
        $parada++;
    }

    #ARRAY ASOCIATIVOS

    $alumno = array("Nombre" => "Migue",
                    "Apellidos" => "Kerry",
                    "Edad" => 23,
                    "estaAprobado" => false);

    echo $alumno["Nombre"].$alumno["Apellidos"].$alumno["Edad"];

    ?>
</body>
</html>