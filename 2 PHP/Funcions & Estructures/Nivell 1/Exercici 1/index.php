    <?php
    // Programa una funció que, donat un número qualsevol (per exemple, la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla.
    
   
   echo parImpar(24);
   
    function parImpar($numero){
      if ($numero %2 == 0) {
          echo "El numero és parell";
        }else{
          echo "El numero és imparell";
        }
    }

    ?>
    
