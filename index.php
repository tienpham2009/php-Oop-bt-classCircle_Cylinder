<?php
use circle\Circle;
use circle\Cylinder;
include_once "circle/Circle.php";
include_once "circle/Cylinder.php";



$circle = new Circle(3,"red");
$cylinder = new Cylinder(4,"black",5);

//var_dump($circle->getArea());
//echo "<br>";
echo $circle;
echo "<br>";
echo $cylinder->calculatorVolume();
echo "<br>";


