<?php

$day = (int)$_POST['number_day'];

//$array_days = ["Lunes", "Martes","Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
switch($day){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Día inválido";
        break;
}
?>