<?php
// main_shapes.php
require_once 'Shape.php';

$figures = [
    new Circle(5),
    new Square(4),
    new Triangle(3, 6),
    new Sphere(2.5),
    new Cube(3)
];

foreach ($figures as $shape) {
    echo $shape . "\n";
}
