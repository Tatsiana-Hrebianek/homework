<?php

declare(strict_types=1);

abstract class Vehicle
{
    abstract public function move(): void;
}


interface Fuelable
{
    public function refuel(): void;
}

class Car extends Vehicle implements Fuelable
{

    public function move(): void
    {
        echo "Машина едет" . PHP_EOL;
    }

    public function refuel(): void
    {
        echo "Машина заправлена" . PHP_EOL;
    }
}

class Bike extends Vehicle
{

    public function move(): void
    {
        echo "Велосипед едет" . PHP_EOL;
    }
}

$car = new Car();
$car->move();
// ✅ "Машина едет"

$car->refuel();
// ✅ "Машина заправлена"

$bike = new Bike();
$bike->move();  
// ✅ "Велосипед едет"
