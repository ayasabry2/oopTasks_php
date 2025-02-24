<?php
abstract class Shape {
    protected $color;

    public function __construct($color = "red") {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }
    abstract public function getArea();

    public function __toString() {
        return "Shape[color=" . $this->color . "]";
    }
}

trait Circle {
    protected $radius = 1.0;

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Cylinder extends Shape {
    use Circle; 

    private $height = 1.0;

    public function __construct($radius = 1.0, $height = 1.0, $color = "red") {
        parent::__construct($color);
        $this->radius = $radius; 
        $this->height = $height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getVolume() {
        return $this->getArea() * $this->height;
    }

    public function __toString() {
        return "Cylinder[radius=" . $this->radius . ", color=" . $this->color . ", height=" . $this->height . "]";
    }
}

$cylinder = new Cylinder(3, 5, "green");
echo $cylinder . "\n";
echo "Cylinder Volume: " . $cylinder->getVolume() . "\n";
?>
