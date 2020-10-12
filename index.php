<?php
include_once 'Circle.php';
include_once 'Cylinder.php';

$circle = new Circle(5,'Red');
$cylinder = new Cylinder(5,'Blue',10);

echo "Area of the Circle is : " . $circle->calculateArea() . "<br>";
echo "Color of the Circle is :" . $circle->getColor();
echo "Volume of the Cylinder is : " . $cylinder->calculateVolume() . "<br>";
echo "Color of the Cylinder is : " . $cylinder->getColor();
