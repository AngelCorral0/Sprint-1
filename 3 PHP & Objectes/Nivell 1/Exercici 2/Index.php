<?php
require "Shape.php";
require "Triangle.php";
require "Rectangle.php";

$triangle1 = new Triangle(7, 2);
echo $triangle1->areaTriang() . "<br>";

$rectangle1 = new Rectangle(7, 2);
echo $rectangle1->areaRectangle();

?>

    
