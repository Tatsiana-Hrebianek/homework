<?php

declare(strict_types=1);

require_once('4.php');
require_once('5.php');

class Car implements Movable
{
    use Loggable;
    private string $brand;
    private string $model;
    private int $year;

    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }



    public function getCarInfo(): string
    {
        return "Брэнд: {$this->brand},  модель: {$this->model}, год: {$this->getYear()}";
    }

    public function move(): string
    {
        return 'Машина едет';
    }
}

$car = new Car('mercedes', 'benz', 1998);
$car->setYear(2022);
// echo $car->getYear();
// echo $car->getCarInfo();
$car->log("Запущен двигатель");

?>
