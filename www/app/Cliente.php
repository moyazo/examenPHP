<?php 
class Cliente{  

    public string $nombre ="";
    public int $num = 0;
    private $soporteAlquilados = [];
    private int $numSoportesAlquilados = 0;
    private int $maxAlquilerConcurrente = 3;


    public function __construct(string $nombre,int $num){
        $this->nombre = $nombre;
        $this->setNumero($num);
  }
    public function getNumero()
    {
        return $this->num;
    }

  
    public function setNumero($num)
    {
        $this->num = $num;

        return $this;
    }

    
    public function getNumSoportesAlquilados()
    {
        return $this->numSoportesAlquilados;
    }

    public function tieneAlquilado(Soporte $s){
        foreach($this->soporteAlquilados as $soporte){

            if(in_array($soporte,$this->soporteAlquilados) == $s->titulo){
                    return true;
            }else{
                return false;
            }
        }
    } 


    public function alquilar(Soporte $s){
        
            if(in_array($s->getNumero(),$this->soporteAlquilados) && ($this->getNumSoportesAlquilados() == $this->maxAlquilerConcurrente)){
                echo "El soporte ya está alquilado.
                     Además, has superado el limite de alquiler (".$this->maxAlquilerConcurrente.")<br><br>";
                     return $this;
            }else if(in_array($s->getNumero(),$this->soporteAlquilados) && ($this->getNumSoportesAlquilados() < $this->maxAlquilerConcurrente)){
                echo "El soporte ya está alquilado. Alquile otro soporte.<br>
                Soportes alquilados:".$this->getNumSoportesAlquilados()."<br> Alquileres máximos: ".$this->maxAlquilerConcurrente."<br><br>";
                     return $this;
            }else if(!in_array($s->getNumero(),$this->soporteAlquilados) && ($this->getNumSoportesAlquilados() == $this->maxAlquilerConcurrente)){
                    echo "El soporte no está alquilado.
                    Pero, has superado el limite de alquiler (".$this->maxAlquilerConcurrente.")<br><br>";
                    return $this;
            }else if(!in_array($s->getNumero(),$this->soporteAlquilados) && ($this->getNumSoportesAlquilados() < $this->maxAlquilerConcurrente)){
                $this->numSoportesAlquilados++;
                array_push($this->soporteAlquilados,$s->getNumero());
                echo "<br>".$s->titulo." ALQUILADO <br>
                Soportes alquilados:".$this->getNumSoportesAlquilados()."<br> Alquileres máximos: ".$this->maxAlquilerConcurrente."<br><br>";
                return $this;
            }

    }


    public function devolver(int $numSoporte){
   
       if(in_array($numSoporte,$this->soporteAlquilados)){
        echo "Soporte con número: ". $numSoporte . ", ha sido duevuelto correctamente.
         <br> Alquileres restantes: ".$this->getNumSoportesAlquilados()."<br>";

       }else{
        echo "Soporte con número: ". $numSoporte . ", no existe. Revise bien por favor";
       }
       $this->numSoportesAlquilados--;
    }




    // public function listaAlquileres(){
        
    //     echo "El cliente ". $this->nombre." tiene " .$this->getNumSoportesAlquilados().":<br>";
    //         for ($i=0; $i < $this->getNumSoportesAlquilados(); $i++) {
    //             echo "HOLA";
    //             echo "Soporte ".$i.": ".$this->soporteAlquilados[$i];
    //         }
            
            
    // }








    public function muestraResumen(){
        // echo parent::muestraResumen();
    }
}



?>