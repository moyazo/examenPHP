<?php
 include_once  "./app/Soporte.php";
 include_once  "./app/Cliente.php";
 include_once  "./app/Disco.php";
 include_once  "./app/Juego.php";

//instanciamos un par de objetos cliente

$cliente1 = new Cliente("Bruce Wayne", 23);
$cliente2 = new Cliente("Clark Kent", 33);

//mostramos el número de cada cliente creado 
echo "<br>El identificador del cliente 1 es: " . $cliente1->getNumero();
echo "<br>El identificador del cliente 2 es: " . $cliente2->getNumero();

//instancio algunos soportes 
$soporte1 = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);  
$soporte2 = new Disco("Origen", 24, 15, "es,en,fr", "16:9");
$soporte3 = new Disco("El Imperio Contraataca", 2, 3, "es,en","16:9");
$soporte4 = new Disco("Cars", 4, 3, "es,en","16:9");

//alquilo algunos soportes
$cliente1->alquilar($soporte1)->alquilar($soporte2)->alquilar($soporte3);


//voy a intentar alquilar de nuevo un soporte que ya tiene alquilado
$cliente1->alquilar($soporte2);
//el cliente tiene 3 soportes en alquiler como máximo
//este soporte no lo va a poder alquilar
$cliente1->alquilar($soporte4);
//este soporte no lo tiene alquilado
echo "<br>".$cliente1->devolver(24);
//devuelvo un soporte que sí que tiene alquilado
echo "<br>".$cliente1->devolver(26);
//alquilo otro soporte
$cliente1->alquilar($soporte4);
//listo los elementos alquilados
// $cliente1->listaAlquileres();
//este cliente no tiene alquileres
echo "<br>".$cliente2->devolver(2);






