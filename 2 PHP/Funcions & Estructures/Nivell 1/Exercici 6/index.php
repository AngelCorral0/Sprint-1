<?php

/*Charlie em va mossegar el dit!

Charlie et mossegarà el dit exactament el 50% del temps.

 Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/ 
 
 echo isBitten();

 function isBitten(){
    $percent =(bool)rand(0,1);

    if($percent == true){
        echo "Charlie t'ha mossegat!";
    }else{
        echo "Charlie no t'ha mossegat!";
    }
 }
 

?>