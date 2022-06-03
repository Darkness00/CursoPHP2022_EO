<?php

//validar si cumple o no una condición

$edad = 18;

if ($edad >=18) {
    echo "cumple con la edad";
}
else {
    echo "no cumple";
}
echo "<br>";
$poseecedula = true;
if ($edad >= 18 && $poseecedula) {
    echo "puede ingresar";
}
else {
    echo "no puede ingresar";
}

// si el dato es nulo
echo "<br>";
$nombrecompleto = "nullo";

if (is_null($nombrecompleto)) {
    echo "";
}
else
{
    echo $nombrecompleto;
}

// si el dato es vacio
echo "<br>";
$nombrecompleto = "";

if ($nombrecompleto == "") {
    echo "vacio";
}
else
{
    echo $nombrecompleto;
}