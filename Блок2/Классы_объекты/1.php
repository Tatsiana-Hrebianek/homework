<?php

declare(strict_types=1);

class Car
{
    private string $brand;
    private string $model;
    private int $year;

    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    } 

    public function getCarInfo(): string
    {
        return "Брэнд: {$this->brand},  модель: {$this->model}, год: {$this->year}";
    }
}

$car = new Car('mercedes', 'benz', 1997);
echo $car->getCarInfo();

?>
