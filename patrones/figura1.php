<?php
    // DEFINICION DE CLASES
        class figura{
            public function Dibujar(){
                echo "La figura esta dibujada.";
                
            }
        }
        class circulo extends figura{
            public function Girar(){
                echo "Circulo Girando...";
            }
        }
        class cuadrado extends figura{
            public function DibujarReal(){
                echo "-------------<br>";
                echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       |<br>";
                echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       |<br>";
                echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       |<br>";
                echo "-------------";
                
            }
        }
        class triangulo extends figura{
            public function DibujarTriangulo(){
                echo "Triangulo...";
                $base = 200;
$altura = 150;

// Generar el código SVG del triángulo
$svg = '<svg width="' . $base . '" height="' . $altura . '">';
$svg .= '<polygon points="0,0 ' . $base . ',0 ' . ($base / 2) . ',' . $altura . '" style="fill:blue;stroke:black;stroke-width:2" />';
$svg .= '</svg>';

// Imprimir el código SVG
echo $svg;
            }
        }


    // CODIGO CLIENTE
        $plato = new circulo();
        $moneda = new circulo();

        $cuadro=new cuadrado();
        $escuadra= new triangulo();

        $plato->Dibujar();
        echo "<br>";
        $moneda->Dibujar();
        echo "<br>";
        $plato->Girar();
        echo "<br>";
        $moneda->Girar();
        echo "<br>";
        echo "<br>";
        $cuadro->Dibujar();
        echo "<br>";
        echo "<br>";
        $escuadra->Dibujar();
        echo "<br>";
        echo "<br>";
        $cuadro->DibujarReal();
        $escuadra->DibujarTriangulo();        
        