<?php
if ( ! empty($_POST)) {
    if (isset($_POST["Nombre"]) && isset($_POST["Apellidos"])) {
        echo "Por favor, introduzca información. Nombre y Apellidos vacio.";
    } else {
        echo "Nombre: ".$_POST["INombre"]."<br>";
        echo "Apellidos: ".$_POST["IApellidos"]."<br>";
    }
} else {
    echo "Por favor, introduzca información. Formulario vacio.";
}

//Crear Fichero

$fichero = fopen("comprobacion.txt","a+");
if ($fichero == false) {
    echo "Error no se ha creado";
} else {
    fwrite($fichero, isset($_POST["INombre"]));
    fwrite($fichero, isset($_POST["IApellidos"]));
}

fclose($fichero);

?>