<?php

declare(strict_types=1);

require_once('2.php');

interface Movable
{
    public function move(): string;
}

class Bicycle implements Movable
{

    public function move(): string
    {
        return 'Велосипед движется';
    }
}

// $car = new Car("Ford", "Focus", 2019);
// echo $car->move();
// ✅ "Машина едет"

// $bike = new Bicycle();
// echo $bike->move();  
// ✅ "Велосипед движется"

?>
