<?php 

// // funciones especiales php para trabajar con arreglos

// //definir un array

// $numero = [5, "3", true, 2.35];

// var_dump($numero);

// echo "<br>";

// //ver de manera mas legible
// print_r($numero);

// // acceder a un arreglo de manera directaS
// echo "<br>";

// echo $numero[3];

// echo "<br>";

// //definimos un arreglo

// /*

// 1-0-n numeros corresponden a los indices en el array
// 2-$numero[0] -- corresponden al elemento del arreglo
// 3-los indices del array siempre inician en 0 no en 1
// 4-Los arreglos pueden guardar cuaquier tipo de dato: int, float, booleano, string etc
// 5-los arreglos contienen una longitud basada en el numero de elementos que lo contengan
// 6-los arreglo pueden ser anidados

// */


// $numero[4] = "numero 8";

// var_dump($numero);

// echo "<br>";


// $numero[5] = 'numero';

// var_dump($numero);

// echo "<br>";


// // saber la longitud del arreglo
// echo "La longitud de este arreglo es de = ". count($numero);
// echo "<br>";

// //recorrer el arreglo

// for ($i=0; $i < count($numero) ; $i++) { 
//     echo $numero[$i];
//     echo "<br>";
// }

// //cambiar el elemento de un array y tipo de dato

// echo $numero[3] = "fue cambiado";

// var_dump($numero);


// echo $numero[2] = 53.3;

// var_dump($numero);

// //convertir un string a un arrary
// echo "<br>";
// $url = "http://localhost/cursophp/06-funcionesphp/arrays.php";

// echo $url;

// $convertirStringToArray = explode("/",$url);

// var_dump($convertirStringToArray);
// echo "<br>";
// echo $convertirStringToArray[3];


// //meses de año

// $meses = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];


// //recorres los meses del año con foreach

// foreach ($meses as $valor) {
//     echo $valor;
//     echo "<br>";
// }

// $cont = 1;

// foreach ($meses as $valor) {
//     echo "[$cont]  =>". $valor;
//     echo "<br>";

//     //incrementando el contador
//     $cont++;
// }

//validar arreglos vacios

$nombre = [23];

echo count($nombre);
echo "<br>";


if (!empty($nombre)) {
    echo "no esta vacio";
}else
{
   echo  "es vacio";
}

//arreglos anidados

$arreglodoble = [[]];
var_dump($arreglodoble);

// si no se especifica el indice del arreglo

$arreglo[] = 23.2;
$arreglo[] = "Hola mundo";

$arreglo[7] = true;
$arreglo[3] = "ultimo";

var_dump($arreglo);

// array multidimensionales

$arrayMulti = [
                [0,1,2,3,4],
                [5,6,7,8,9],
                [10,11,12,13,14]
];


var_dump($arrayMulti);

foreach ($arrayMulti as $unadimension) {
    echo "[";
    foreach ($unadimension as $value) {
        echo $value . ",";
    }    
    echo "]";


}


















?>