<?php

declare(strict_types=1);

require_once('2.php');

class ElectricCar extends Car
{

    private int $batteryCapacity;

    public function __construct(string $model, string $color, int $speed, int $batteryCapacity)
    {
        parent::__construct($model, $color, $speed);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getBatteryInfo(): string
    {
        return "Емкость батареи: {$this->batteryCapacity} kWh";
    }
}

$tesla = new ElectricCar("Tesla Model 3", "Синий", 2021, 100);
// echo $tesla->getCarInfo(); // Наследуемый метод
// echo $tesla->getBatteryInfo(); // Новый метод

?>
