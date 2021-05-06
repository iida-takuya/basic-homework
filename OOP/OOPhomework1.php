<?php
class Shape {
    public $width;
    public $height;

    public function __construct($width,$height) {
        $this->width = $width;
        $this->height = $height;
    }
}

class Triangle extends Shape {
    public function area() {
        return $this->width * $this->height / 2; 
    }
}

class Rectangle extends Shape {
    public function area() {
        return $this->width * $this->height; 
    }
}

$triangle = new Triangle(3, 4);
echo "The area of the triangle = " . $triangle->area();
echo "<br>";
$rectangle = new Rectangle(3, 4);
echo "The area of the rectangle = " . $rectangle->area();
?>

