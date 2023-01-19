<?php
// Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.

$numdif = rand(0,100);

for($num = 0; $num <= $numdif; $num ++){
    echo $num . ", ";
}

?>