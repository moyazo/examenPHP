<?php 
// EJERCICIO 1 - EXAMEN
include "Resumible.php";

abstract class Soporte implements Resumible // Al crear una clase abstracta, nos permiten tener una clase base con cierta funcionalidad común ya implementada, sobre la que podemos heredar y especificar algunos métodos
{
   private const IVA = 0.21; 
   public string $titulo = "";
   public int $numero = 0;
   private int $precio = 0;

   public function __construct(string $titulo, int $numero, int $precio){

            $this->titulo = $titulo;
            $this->numero = $numero;
            $this->precio = $precio;


   }

   



   /**
    * Get the value of titulo
    */ 
   public function getPrecio()
   {
      return $this->precio;
   }

   public function getPrecioConIva()
   {
      return ($this->precio * self::IVA);
   }
   public function getNumero()
   {
      return $this->numero ;
   }
   
   public function mostrarResumen()
   {
    $resumen = "Este es el resumen de este soporte: <br> Titulo: " . $this->titulo .
    "<br> Número: " . $this->getNumero() . "<br> Precio / Precio con IVA: " . $this->getPrecio()."/".$this->getPrecioConIva();
      
    return $resumen ;
   }
   
  

}
?>