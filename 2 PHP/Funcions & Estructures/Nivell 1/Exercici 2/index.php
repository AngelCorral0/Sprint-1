<?php
// Per jugar a l'"amagatall" se'ns ha demanat un programa que compti fins a 10. Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.

echo counting();

function counting(){
    for($num = 0; $num <= 10; $num += 2){
        echo $num . "<br>";
    }
}

?>