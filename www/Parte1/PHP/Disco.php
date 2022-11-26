<?php
// EJERCICIO 1 - EXAMEN
// include "Soporte.php";

class Disco extends Soporte{
    public string $idiomas = "";
    private string $formatPantalla = "";

    public function __construct(string $titulo, int $numero, int $precio,string $idiomas, string $formatPantalla,){
          parent::__construct($titulo,$numero,$precio);
          $this->idiomas = $idiomas;
          $this->formatPantalla = $formatPantalla;

    }

    public function muestraResumen(){
       echo parent::muestraResumen();
        return "<br>El idioma será en " . $this->idiomas . "<br>Formato de Pantalla = " .$this->formatPantalla;
    }




}



?>