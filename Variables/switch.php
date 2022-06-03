<?php

/*
1 - Lunes
2 - Martes
3 - Miercoles
4 - Jueves
5 - Viernes
6 - Sabado
7 - Domingo
*/

$numero = 3;

switch ($numero) {
    case '1':
        echo "LUNES";
        break;
    case '2':
        echo "MARTES";
        break;
    case '3':
        echo "MIERCOLES";
        break;
    case '4':
        echo "JUEVES";
        break;
    
    default:
    echo "NO EXISTE";
        break;
}