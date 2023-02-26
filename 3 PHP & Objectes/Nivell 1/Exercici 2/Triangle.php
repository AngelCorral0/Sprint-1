<?php

class triangle extends Shape
{
    Public function areaTriang()
    {
        $areaTotal =  parent ::area() /2;
        echo "L'area del triangle és: " . $areaTotal;
    }

}