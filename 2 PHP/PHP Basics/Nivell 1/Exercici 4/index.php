<?php
define("X","4");
define("Y","5");
define("N","2.20");
define("M","3.25");
$dobleX = X *2;
$dobleY = Y *2;
$dobleN = N *2;
$dobleM = M * 2;
$totalSum = X+Y+N+M;
$totalMult = X*Y*N*M;

echo "Variable X: " . X . ", y variable Y: " . Y . "<br>";
echo "La suma de de X + Y es de: " . X + Y . "<br>";
echo "La resta de X - Y es de: " . X - Y . "<br>";
echo "La multiplicacion de X * Y es de: " . X * Y . "<br>";
echo "El modulo de X % Y es de: " . X % Y . "<br>";
echo "Variable X: " . N . ", y variable Y: " . M . "<br>";
echo "La suma de de N + M es de: " . N + M . "<br>";
echo "La resta de N - M es de: " . N - M . "<br>";
echo "La multiplicacion de N * M es de: " . N * M . "<br>";
echo "El modulo de N % M es de: " . N % M ."<br>";
echo "El doble de X es: " . $dobleX . ", el doble de Y es: " . $dobleY . ", el doble de N es: " . $dobleN . ". Y el doble M es: " . $dobleM . "<br>";
echo " La suma de X + Y + N + M es: " . $totalSum . "<br>";
echo "La multiplicación de todos ellos juntos es de: " . $totalMult;
?>