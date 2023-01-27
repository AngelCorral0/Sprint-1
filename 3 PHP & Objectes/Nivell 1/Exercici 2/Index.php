<?php

$triangle1 = new Triangle(45,37);
echo $triangle1->areaTriang() ."<br>";

$rectangle1 = new Rectangle(7,2);
echo $rectangle1->areaRect();

class Shape{
    public $ample;
    public $alt;

    public function __construct($ample, $alt){
    $this-> ample = $ample;
    $this->alt = $alt;
    }
}

class Triangle extends Shape{
   
    public function __construct($alt, $ample){
      parent::__construct($alt, $ample);
    }
   
    public function areaTriang(){
       return "L'area d'aquest triangle és: " . (($this->alt + $this->ample)/2);
   
    }
}

class Rectangle extends Shape{

    public function __construct($alt, $ample){
        parent::__construct($alt, $ample);        
    }

    public function areaRect(){
        return "L'area d'aquest rectangle és: " . $this->alt * $this->ample;
    }
}

?>