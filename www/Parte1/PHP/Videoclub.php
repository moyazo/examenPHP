<?php 
include "Soporte.php";
include "Cliente.php";
include "Disco.php";
include "Juego.php";
class Videoclub{
    private string $nombre = "";
    private $productos = [];
    private int $numProductos = 0;
    private $socios = [];
    private int $numSocios = 0;

    public function __construct(string $nombre){
        $this->nombre = $nombre;
    }


    private function incluirProducto(Soporte $producto){
        $array_productos = [];
        $this->numProductos++;
        array_push($array_productos,$producto->numero." / ".$producto->titulo);
        array_push($this->productos,$array_productos);
    }
    public function incluirDisco(string $titulo, int $precio,string $idiomas,string $pantalla){
        $disco = new Disco($titulo,sizeof($this->productos)+1,5,"es,fr,en","16:9");
        $this->incluirProducto($disco);
    }
    public function incluirJuego(string $titulo,int $precio, string $consola, int $minJ, int $maxJ){
        $juego = new Juego($titulo,sizeof($this->productos)+1,30,$consola,$minJ,$maxJ);
        $this->incluirProducto($juego);
    }
    public function incluirSocio(string $nombre,int $maxAlquileresConcurrentes){
        $socio = new Cliente($nombre,sizeof($this->socios)+1);
        $array_socios = [];
        $this->numSocios++;
        array_push($array_socios,$socio->nombre." / ".$socio->num);
        array_push($this->socios,$array_socios);
    }

    public function listarProductos(){
        $listadoP = $this->productos;
        $listadonumP =  [];


        echo "LISTADO DE PRODUCTOS: <br><br>";
        for($i=0; $i < sizeof($this->productos) ; $i++) { 
            array_push($listadonumP,$listadoP[$i]);
            for ($j=0; $j < sizeof($listadonumP[$i]); $j++) { 
                echo "- " . $listadonumP[$i][$j]."<br>";
            }
           
        }
    }

    public function listarSocios(){
        $listadoS = $this->socios;
        $listadonumS =  [];


        echo "LISTADO DE SOCIOS: <br><br>";
        for($i=0; $i < sizeof($this->socios) ; $i++) { 
            array_push($listadonumS,$listadoS[$i]);
            for ($j=0; $j < sizeof($listadonumS[$i]); $j++) { 
                echo "- " . $listadonumS[$i][$j]."<br>";
            }
           
        }
    }


    // public function alquilaSocioProducto(int $numSocio, int $numProducto){

    //         $socios = [];
    //         for ($i=0; $i < $this->numSocios; $i++){ 
    //             if(sizeof($socios) == $this->numSocios){
    //                 break;
    //             }else{
    //                 array_push($socios,[]);
    //             }
    //         }

    //         for ($i=0; $i < sizeof($socios); $i++) { 
    //             if($numSocio == ($i+1)){
    //                    if(array_search($numProducto,$socios[$i])){
    //                     echo "Este socio (".$numSocio.") ya tiene alquilado este soporte";
    //                 }else{
    //                     echo "<br>Soporte ". $numProducto. "alquilado por el socio " .$numSocio."<br><br>"; 
    //                     array_push($socios[$i],$numSocio);
    //                     array_push($socios[$i],$numProducto);
    //                 }
                    
                
    //                 break;
    //             }else{

    //             }
    //         }             
    // }

}
?>