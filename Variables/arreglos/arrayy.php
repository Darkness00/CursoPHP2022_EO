<?php 
//convertir un string en un array

$url = "https://www.thingiverse.com/make:588007";
$convertirstringtoarray = explode("/",$url);//"/" es el patron del string
var_dump($convertirstringtoarray);
echo "<br>";
echo $convertirstringtoarray[2];

//funcion para validar una variables
$nombre = [23];
echo count($nombre);
echo "<br>";
if (empty($nombre)) { //empty determina si una variable esta vacía
    echo "está vacío";
}
else {
    echo "no esta vacío";
}
//TAREA DE LO ULTIMO DE LA CLASE
/*
ARREGLAR QUE SE SUBA A LA CARPETA
MENSAJE DE QUE SE SUBIO Y MUESTRE EL TIPO DE ARCHIVO
VALIDAR 
*/
?>