<?php
// Per prevenir oblits en utilitzar la nostra meravellosa opció "amagatall" establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.

echo counting();

function counting($param = 10){
    for($num = 0; $num <= $param; $num += 2){
        echo $num . "<br>";
    }
}

?>