<?php
/*Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
 Si la nota és menor a 33%, l'estudiant reprovarà.*/

 
function grauNota (){
    $nota = 50;
    if($nota >=60 && $nota <=100){
        echo  "La nota de l'alumnat és d'un " . $nota . "%" . " i té un grau de Primera Divisió.";
     }else if($nota >= 45){
        echo "La nota de l'alumnat és d'un " . $nota . "%" . " i té un grau de Segona Divisió.";
     }else if($nota >=33){
        echo "La nota de l'alumnat és d'un " . $nota . "%" . " i té un grau de Tercera Divisió.";
     }else if($nota >= 0){
        echo "La nota de l'alumnat és d'un " . $nota . "%" . " i per tant ha reprovat.";
      }
}
echo grauNota();

?>