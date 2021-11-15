
    <?php
    #Variables
    if(isset($_POST["vuelo1"]) && isset($_POST["vuelo2"])) {

        $selector = $_POST["Opciones"];

        $infovuelo1 = $_POST["vuelo1"];
            $codigov1 = $infovuelo1["codigo1"];
            $ciudadOv1 = $infovuelo1["ciudado1"];
            $ciudadDv1 = $infovuelo1["ciudadd1"];
            $preciov1 = $infovuelo1["precio1"];
            $fechasv1 = $infovuelo1["fechas1"];

        $infovuelo2 = $_POST["vuelo2"];
            $codigov2 = $infovuelo2["codigo2"];
            $ciudadvO2 = $infovuelo2["ciudado2"];
            $ciudadvD2 = $infovuelo2["ciudadd2"];
            $preciov2 = $infovuelo2["precio2"];
            $fechasv2 = $infovuelo2["fechas2"];

    #Herramientas

    //Une vuelos
    function Unir($infovuelo1,$infovuelo2) {
        $resUnir = array_merge($infovuelo1,$infovuelo2);
        echo "<h2><b>Une vuelos</b></h2><br>";
        print_r($resUnir);
    }

    //Diferencia entre vuelos
    function Diferencia($vuelo1,$vuelo2) {
        $resDiferencia = array_diff($vuelo1,$vuelo2);
        echo "<h2><b>Diferencia entre vuelos</b></h2><br>";
        print_r($resDiferencia);
    }

    //Ordena vuelos
    function Ordena($vuelo1) {
        sort($vuelo1);
        echo "<h2><b>Ordena vuelos</b></h2><br>";
        print_r($vuelo1);
    }

    //Información común
    function Comun($vuelo1,$vuelo2) {
        $resComun=array_intersect($vuelo1,$vuelo2);
        echo "<h2><b>Información común</b></h2><br>";
        print_r($resComun);
    }

    #Opciones
    switch ($selector) {
        case 'union':
            Unir($infovuelo1,$infovuelo2);
            break;
        case 'diff':
            Diferencia($infovuelo1,$infovuelo2);
            break;
        case 'sort':
            Ordena($infovuelo1,$infovuelo2);
            break;
        case 'intersec':
            Comun($infovuelo1,$infovuelo2);
            break;

        default:

            break;
    }
    }
    ?>
