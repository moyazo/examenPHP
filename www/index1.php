<?php 
 include_once  "./app/Soporte.php";
 include_once  "./app/Disco.php";
$soporte1 = new Disco("Tenet", 22, 3,"en,es,fr","16:9"); 
echo "<strong>" . $soporte1->titulo . "</strong>"; 
echo "<br>Precio: " . $soporte1->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros <br><br>";
echo $soporte1->mostrarResumen();



$miDisco = new Disco("Origen",24,15,"es,en,fr","16:9");
echo"<strong>".$miDisco->titulo."</strong>";
echo"<br>Precio:".$miDisco->getPrecio()."euros";
echo"<br>PrecioIVAincluido:".$miDisco->getPrecioConIva()."euros<br>";
echo $miDisco->mostrarResumen();
?>