<?php

class triangle extends Shape
{
    public function area()
    {
        $area = $this->alt * $this->ample;
        echo "L'area del triangle és: " . $area /2;
    }

}