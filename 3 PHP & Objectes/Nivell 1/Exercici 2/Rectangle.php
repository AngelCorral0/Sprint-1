<?php

class Rectangle extends Shape
{
    public function area()
    {
        $area = $this->alt * $this->ample;
        echo "L'area del rectangle és: " . $area;
    }

}


