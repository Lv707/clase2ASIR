<?php
include 'BBDD_Arrays.php';
#Mostrar Vuelo
$IVuelo = $_POST["vuelo"];


#Estadística del Aeropuerto

/*Media de horas voladas de todos los vuelos*/
$HMedia = array_sum($ADViaje)/count($ADViaje);

/*Numero total de pasajeros de todos los vuelos*/
$TPasajeros = array_sum($ANPasajeros);

/*Número de aviones por fabricante*/


/*Destino con más conexiones*/


/*Destinos con menos conexiones*/



#Estadística de Ciudades

/*El número totales de ciudades visitadas*/
$TVCiudades = count($ADestino);

/*Las veces que se ha ido a una determinada ciudad.*/


/*Cual es la ciudad más visitada.*/


/*Cuales son las ciudades menos visitadas.*/



#Estadística del Avión

/*Destinos del avión*/


/*Fabricante del avión*/


/*Minutos totales volando*/
$MTVolando = array_sum($ADViaje);

/*Media de horas voladas*/
$MHVoladas = (array_sum($ADViaje)/60)/count($ADViaje);

/*Media de pasajeros*/
$MPasajeros = array_sum($ANPasajeros)/count($ANPasajeros);

/*Pasajeros totales*/
$TPasajeros = array_sum($ANPasajeros);

?>