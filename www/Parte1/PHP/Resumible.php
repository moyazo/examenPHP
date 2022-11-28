<?php 

interface Resumible{


    public function mostrarResumen();

}


// Una interfaz es una manera de escribir los métodos necesarios que debe tener una clase si o si. Todos los métodos de una interfaz son abstractos por lowue debemos tratarlos como tal. Si no añadimos los métodos 
// a la clase que implementa la interfaz obtendremos un error. Sin embargo, no necesitamos que los hijos de esa calse utilizen los métodos de la interfaces por lo que no habría problema al no incluirlas.


?>