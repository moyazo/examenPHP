<?php 

include_once  "./app/Soporte.php";
include_once  "./app/Juego.php";

$miJuego = new Juego("God of War: Ragnarök", 26, 49.99, "PS4", 1, 1); 
echo "<strong>" . $miJuego->titulo . "</strong>"; 
echo "<br>Precio: " . $miJuego->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $miJuego->getPrecioConIva() . " euros<br><br>";
echo $miJuego->mostrarResumen();



?>