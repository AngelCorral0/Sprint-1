<?php

class Rectangle extends Shape
{
   
    Public function areaRectangle()
    {
        $areaTotal =  parent ::area();
        echo "L'area del rectangle és: " . $areaTotal;
    }

}


