<?php

include_once "./app/Videoclub.php"; // No incluimos nada más

$vc = new Videoclub("Severo 8A"); 

//voy a incluir unos cuantos soportes de prueba 
$vc->incluirJuego("God of War", 19.99, "PS4", 1, 1); 
$vc->incluirJuego("The Last of Us Part II", 49.99, "PS4", 1, 1);
$vc->incluirDisco("Torrente", 4.5, "es","16:9"); 
$vc->incluirDisco("Origen", 4.5, "es,en,fr", "16:9"); 
$vc->incluirDisco("El Imperio Contraataca", 3, "es,en","16:9"); 


//listo los productos 
$vc->listarProductos(); 

//voy a crear algunos socios 
$vc->incluirSocio("Amancio Ortega",2); 
$vc->incluirSocio("Pablo Picasso", 2); 

// $vc->alquilaSocioProducto(1,2);   // NO ME SALE
// $vc->alquilaSocioProducto(1,3); 
//alquilo otra vez el soporte 2 al socio 1. 
// no debe dejarme porque ya lo tiene alquilado 
// $vc->alquilaSocioProducto(1,3); 
//alquilo el soporte 6 al socio 1. 
//no se puede porque el socio 1 tiene 2 alquileres como máximo 
// $vc->alquilaSocioProducto(1,6); 

//listo los socios 
$vc->listarSocios();
