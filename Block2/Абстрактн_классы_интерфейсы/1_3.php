<?php

declare(strict_types = 1);

require_once('2.php');

abstract class Shape {

    abstract public function getArea(): int|float;
}

class Rectangle extends Shape implements Drawable {

    private int $a;
    private int $b;

    public function __construct(int ...$param){

        $this->a = $param[0];
        $this->b = $param[1];
    }

    public function getArea(): int|float
    {
        return $this->a * $this->b;
    }

    public function draw(): void {
        echo "Рисую прямоугольник шириной $this->a и высотой $this->b" . PHP_EOL;
    }
}

class Circle extends Shape {

    private int $r;

    public function __construct(int ...$param){
        
        $this->r = $param[0];
    }

    public function getArea(): int|float
    {
        return 3.14*($this->r*$this->r);
    }

    public function draw(): void {
        echo "Рисую круг радиусом $this->r " . PHP_EOL;
    }
}

function renderShape(Shape $shape){
    $shape -> draw();
    echo "Площадь: {$shape -> getArea()} " . PHP_EOL;    
}

// $rect = new Rectangle(10, 5);
// // echo $rect->getArea();  
// // // ✅ 50

// $circle = new Circle(7);
// // echo $circle->getArea();  
// // // ✅ 153.94 (пример для π * r²)

// $rect->draw();  
// // ✅ "Рисую прямоугольник шириной 10 и высотой 5"

// $circle->draw();  
// // ✅ "Рисую круг радиусом 7"

renderShape(new Rectangle(5, 5));  
// ✅ "Рисую прямоугольник шириной 5 и высотой 5"
// ✅ "Площадь: 25"

renderShape(new Circle(3));  
// ✅ "Рисую круг радиусом 3"
// ✅ "Площадь: 28.27"


