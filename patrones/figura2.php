<?php
  //ESTE PROGRAMA DEMUSTRA EL USO DEL PATRON DE DISEÑO "FACTORY".
  
  // PRIMERO CREAMOS UNA INTERFAZ.
  interface FiguraGeometrica{

    //DEFINIMOS TRES FUNCIONES ABSTRACTAS.
    public function Dibujar();
    public function DibujarReal();
    public function CalcularArea($dato);
  }

  class circulo implements FiguraGeometrica{
    public function Dibujar(){
        echo "El objeto circulo se ha dibujado.";
    }
    public function DibujarReal(){

    }
    public function CalcularArea($dato){
        
    return 3.14*$dato*$dato;
    }
  }
  class cuadrado implements FiguraGeometrica{
    public function Dibujar(){
        echo "El objeto cuadrado se ha dibujado.";
    }
    public function DibujarReal(){

    }
    public function CalcularArea($dato){
        
    }
  }
  class triangulo implements FiguraGeometrica{
    public function Dibujar(){
        echo"El objeto triangulo se ha dibujado.";
    }
    public function DibujarReal(){

    }
    public function CalcularArea($dato){
        
    }
  }

class rectangulo implements FiguraGeometrica{
  public function Dibujar(){
      echo "El objeto rectangulo se ha dibujado.";
  }
  public function DibujarReal(){

  }
  public function CalcularArea($dato){
      
  }
  public function CalcularAreaTotal($largo,$ancho){
    return $largo*$ancho;
  }
}

  // AHORA CREAMOS LA CLASE FABRICA DE FIGURAS.
    class figuraFactory{
        public static function CrearFigura($nombre_figura){
            switch ($nombre_figura){
                case 'circulo';
                    return new circulo();
                    break;
                case 'cuadrado';
                    return new cuadrado();
                    break;
                case 'triangulo';
                    return new triangulo();
                    break;
                case 'rectangulo';
                    return new rectangulo();
                    break; 
                   
            }

        }
    }
    //AQUI EMPIEZA EL CODIGO CLIENTE.
    $plato = figuraFactory::CrearFigura('circulo');
    $moneda = figuraFactory::CrearFigura('circulo');

    $plato->Dibujar();
    $moneda->Dibujar();
    echo "<br>";

    $cuadro = figuraFactory::CrearFigura('cuadrado');
    $cuadro->Dibujar();
    echo "<br>";

    $escuadra = figuraFactory::CrearFigura('triangulo');
    $escuadra->Dibujar();
    echo "<br>";

    $area_del_plato =$plato->CalcularArea(8);
    echo "El area del plato de 8cm es ".$area_del_plato;
    echo "<br>";
    echo "<br>";

    $terreno = figuraFactory::CrearFigura('rectangulo');
    $terreno->Dibujar();

    $area_del_terreno =$terreno->CalcularAreaTotal(10,10);
    echo "El area del terreno es ".$area_del_terreno;
