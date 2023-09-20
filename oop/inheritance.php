<?php
// when a class derive  from another class
// public & protected properties,methods from the parent class
// extends keywords
// private properties and method couldn't extends

class Car
{
    protected $car_price;
    public function model()
    {
        return "3D Model Car";
    }
    public function color()
    {
    }
}

class Marchities extends Car
{

    public function runWay()
    {
        return $this->car_price = 15200;
    }
}

class BMW extends Marchities
{
    public function model()
    {
        return "Good Design BMW";
    }
}

$Object = new BMW();
echo "</br>";
echo $Object->model();

$car = new Car();
echo "</br>";
echo $car->model();
echo "</br>";
echo $Object->runWay();

// BMW extends march -> properties->methods -> return yes or no
// Marchities extends Car -> properties->methods -> return yes or no
// model()