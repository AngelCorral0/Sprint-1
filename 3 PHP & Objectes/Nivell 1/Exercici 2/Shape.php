<?php

abstract class  Shape
{
    public $ample;
    public $alt;

    public function __construct($ample, $alt)
    {
        $this->ample = $ample;
        $this->alt = $alt;
    }
    Public function area()
    {
        $area = ($this->ample * $this->alt);
        return   $area;
    }
}

