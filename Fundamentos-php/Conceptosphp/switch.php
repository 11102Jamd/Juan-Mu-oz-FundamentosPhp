<?php
echo "Ejemplo del uso de un comando switch en php"."<br>";
$i = 4;
switch ($i) {
    case 1:
        echo "Uno";
        break;
    case 2:
        echo "dos";
        break;
    case 3:
        echo "Tres";
        break;
    case 4:
        echo "cuatro";
        break;
    default:
        echo "Solo me programaron entre uno y cinco"."<br>";
}