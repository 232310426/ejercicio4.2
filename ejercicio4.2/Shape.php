<?php
// Shape.php

abstract class Shape {
    abstract public function getName(): string;
    abstract public function __toString(): string;
}

abstract class TwoDimensionalShape extends Shape {
    abstract public function getArea(): float;
}

abstract class ThreeDimensionalShape extends Shape {
    abstract public function getArea(): float;
    abstract public function getVolume(): float;
}

class Circle extends TwoDimensionalShape {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function getName(): string {
        return "Circle";
    }

    public function __toString(): string {
        return $this->getName() . " with radius {$this->radius}, area: " . $this->getArea();
    }
}

class Square extends TwoDimensionalShape {
    private float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function getArea(): float {
        return pow($this->side, 2);
    }

    public function getName(): string {
        return "Square";
    }

    public function __toString(): string {
        return $this->getName() . " with side {$this->side}, area: " . $this->getArea();
    }
}

class Triangle extends TwoDimensionalShape {
    private float $base;
    private float $height;

    public function __construct(float $base, float $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea(): float {
        return 0.5 * $this->base * $this->height;
    }

    public function getName(): string {
        return "Triangle";
    }

    public function __toString(): string {
        return $this->getName() . " with base {$this->base} and height {$this->height}, area: " . $this->getArea();
    }
}

class Sphere extends ThreeDimensionalShape {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return 4 * pi() * pow($this->radius, 2);
    }

    public function getVolume(): float {
        return (4/3) * pi() * pow($this->radius, 3);
    }

    public function getName(): string {
        return "Sphere";
    }

    public function __toString(): string {
        return $this->getName() . " with radius {$this->radius}, area: " . $this->getArea() . ", volume: " . $this->getVolume();
    }
}

class Cube extends ThreeDimensionalShape {
    private float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function getArea(): float {
        return 6 * pow($this->side, 2);
    }

    public function getVolume(): float {
        return pow($this->side, 3);
    }

    public function getName(): string {
        return "Cube";
    }

    public function __toString(): string {
        return $this->getName() . " with side {$this->side}, area: " . $this->getArea() . ", volume: " . $this->getVolume();
    }
}
