<?php

class Employee
{
    public $nom;
    public $sou;

    public function initialize($nombre, $sueldo)
    {
        $this->nom = $nombre;
        $this->sou = $sueldo;
    }
    public function print()
    {

        if ($this->sou >= 6000) {
            echo $this->nom . " ha cobrat més de 6.000€ " . "(" . $this->sou . "€)" .  ", per tant ha de pagar impostos.";
        } else {
            echo $this->nom . " ha cobrat menys de 6.000€ " . "(" . $this->sou . "€)" .  ", per tant no ha de pagar impostos.";
        }
    }
}
$Employee1 = new Employee;
$Employee1->nom = "Angel";
$Employee1->sou = 5000;
$Employee1->print();
echo "<br>";

$Employee2 = new Employee;
$Employee2->nom = "Marco";
$Employee2->sou = 7000;
$Employee2->print();
