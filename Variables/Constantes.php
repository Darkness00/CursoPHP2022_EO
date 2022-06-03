<?php

//DEFINIR LAS CONSTANTES

    //1- No necesita el simbolo $
    //2- usamos el metodo llamado DEFINE   
    //3- se asigna una sola vez
    //4- su alcance es global

DEFINE("cuota", 250);
$valorcuota = cuota;
echo $valorcuota;
echo "<br>";
DEFINE("cuota2", 10000);
echo "el valor de cuota 2 es ". cuota2;

//BUENAS PRÁCTICAS EN EL USO DE CONSTANTES
//1- USAR SIEMPRE MAYUSCULAS
//2- NO USAR NOMBRES CON GUIONES BAJOS
//3- NO USAR NOMBRES DE CONSTANTE COMO  _VALOR_
//4- NOMBRES SUPERGLOBALESÇ

//OBTENER UNA URL
$url = "https://pstg-online.edu.ni/course/view.php?id=2763";
$obtenerUrl = explode ("/",$url);
