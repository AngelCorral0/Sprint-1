<?php
require "Shape.php";
require "Triangle.php";
require "Rectangle.php";

$triangle1 = new Triangle(45, 37);
echo $triangle1->area() . "<br>";

$rectangle1 = new Rectangle(7, 2);
echo $rectangle1->area();

?>

    
