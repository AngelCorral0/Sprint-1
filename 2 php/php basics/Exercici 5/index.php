<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4</title>
</head>
<body>
   <?php
        $array1 = [1, 2, 3, 4, 5,];
        $array2 = [6, 7, 8];
        $array2 [3] = 9;
        $resultado = array_merge($array1, $array2);
        foreach ($resultado as $numeros){
        echo $numeros;}
   ?> 
    
</body>
</html>