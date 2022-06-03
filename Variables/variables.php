<?php

$miNombre = "Abierto";

echo $miNombre;

//Forzar el dato con un tipado

//bool
//int
//float
//string
//array
//object

$variableNumerica = (int) 100;
$variableBooleana = (bool) false;
$variableTexto = (string) "Hello";

var_dump($variableNumerica."<br>");
echo "<br>"; //esto es un salto de linea

//variable decimales
$base = (float) 10.2;
$altura = (float) 20.5;
echo "<br>"; //esto es un salto de linea
$arearectangulo = $base * $altura;
echo "el area del rectangulo es = ". $arearectangulo;
echo "<br>"; //esto es un salto de linea

//el area del triangulo
$areaTriangulo = $base * $altura/2;
echo "el area del triangulo es = ".$areaTriangulo;
echo "<br>";

$mensaje = "helloWorld";
function MostrarMensaje()
{
   global $mensaje; //con la palabra global la variable se hace global valga la redundancia
    echo "Mi mensaje es = ".$mensaje;
    echo "<br>";
}
MostrarMensaje(); //asi se "imprime" la funciòn realizada

//variables estaticas

function contador()
{
    //variable estática
    static $cont = 1;
    echo $cont;

    //incrementar la variable en 1
    // $cont = $cont + 1
    $cont++;
}

echo "<br>";
contador();
echo "<br>";
contador();
echo "<br>";
contador();

//variables seteadas o configuradas
// isset: determina si una variable esta definida
echo "<br>";
$edad = 20;

//operador primario
echo (isset($edad) and $edad > 18) ? "Es mayor de edad": "No cumple con la edad";
echo "<br>";
