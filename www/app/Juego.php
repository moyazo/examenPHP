<?php


class Juego extends Soporte{
    public string $consola = "";
    private int $minNumJugadores = 0;
    private int $maxNumJugadores = 0;

    public function __construct(string $titulo, int $numero, int $precio,string $consola,int $minNumJugadores,int $maxNumJugadores){

        parent::__construct( $titulo,$numero,$precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;

    }

    public function mostrarJugadoresPosibles(){
        if($this->minNumJugadores == 1 && $this->maxNumJugadores == 1){
            return "<br>Para ".$this->minNumJugadores." Jugador";
        }else if($this->minNumJugadores == 1 && $this->maxNumJugadores > 1){
            return "<br>Para " .  $this->maxNumJugadores . " jugadores";
        }else if ($this->minNumJugadores > 1 && $this->maxNumJugadores > 1){
            return "<br>De " .  $this->minNumJugadores . " jugadores a " . $this->maxNumJugadores ." jugadores";
        }

    }

    public function mostrarResumen(){
        echo parent::mostrarResumen();
        
        return "<br>Consola: " . $this->consola . "" .$this->mostrarJugadoresPosibles();
    }

}




?>