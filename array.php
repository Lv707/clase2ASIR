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


    //Bucles animados de forma indepediente
    for ($inicio=0; $inicio < 5; $inicio++) { //Bucle externo
        print $inicio.'<br>';
        for ($inicio2=0; $inicio2 < 5; $inicio2++) { //Bucle interno
            print $inicio2.'<br>';
        }
    }

    print "<br><b>BUCLE DEPENDIENTE</b><br>"."<br>";
    //Bucles animados de forma indepediente
    for ($varexterior=0; $varexterior < 5; $varexterior++) {
        print "<b>Muestro variable exterior: ".$varexterior."</b>".'<br>';
        for ($varinterior=0; $varinterior < $varexterior; $varinterior++) {
            print "Muestro variable interior: ".$varinterior.'<br>';
        }
    }

    #Arrays


    print "<br><h2>ARRAY 'ESTÁNDAR'</h2>"."<br>";

    #FORMA 1

    $numerosP = array(2,4,6,8,10);
    print_r($numerosP);
    echo '<br>';
    print "Muestro lo que hay en la posición 3: ".$numerosP[3].'<br>'."<br>";

    $cuentaNumerosP=count($numerosP);
    echo "Valor de la Cuenta Array: ".$cuentaNumerosP."<br>"."<br>";

    for ($i=0; $i < $cuentaNumerosP; $i++) {
        print "Muestro lo que hay en la posición".$i." : ".$numerosP[$i]."<br>";
    }
    echo '<br>';

    #FORMA 2

    $numerosI = [1,3,5,7,9];
    print_r($numerosI);
    echo "<br>";

    #Arrays Asociativos

    print "<br><h3>Arrays Asociativos</h3>"."<br>";

    $potencias2=[1=>2, 2=>4, 3=>8, 4=>16];
    print_r($potencias2);
    echo "<br>";

    $capitales=["Andalucía"=>"Sevilla", "1"=>"2", "3"=>"4"];
    print_r($capitales);
    echo "<br>";

    //Añadir elementos a un array

    $capitales["Cataluña"]="Barcelona";
    print_r($capitales);
    echo "<br>";

    $capitales["Andalucía"]="Sevilla";
    print_r($capitales);
    echo "<br>";

    $cuentaLetras=strlen($capitales["Andalucía"]);
    echo $cuentaLetras;

    $notasAsignaturas=["LMI"=>0, "FOL"=>10, "PAR"=>9,
                        "ISO"=>0, "FH"=>0, "BD"=>4];

    //UNIÓN DE ARRAYS

    echo "<br>";

    $coches1= array("1", "2", "3");
    $coches2= ["4", "5"];
    print_r($coches1);
    echo "<br>";
    print_r($coches2);
    echo "<br>"."Unión de arrays"."<br>";

    $union1con2=$coches1+$coches2;
    print_r($union1con2);
    echo "<br>";

    $union2con1=$coches2+$coches1;
    print_r($union2con1);
    echo "<br>";

    //Borrar elemento

    $coches3= array("1", "2", "3");
    print_r($coches3);
    echo "<br>";
    unset($coches3[1]);
    print_r($coches3);
    echo "<br>";

    //Copiar matrices

    $copiarCapitales = $capitales;
    $copiarCapitales["Andalucía"]="Córdoba";
    print_r($copiarCapitales);
    echo "<br>";
    ?>
</body>
</html>