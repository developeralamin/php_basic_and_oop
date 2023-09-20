<?php
// class Man
// {
//     public $name; // properties
//     public $age;
//     public function showValue($name, $age = 10) // oop methods
//     {
//         echo "Name is : " . $this->name = $name . "</br>";
//         echo " Age is : " .  $this->age = $age;
//     }
// }
// $data = new Man();
// // var_dump($datas instanceof Man);
// $data->showValue("Rahim", 15);

class StacicMethod
{

    public static function message()
    {
        echo "Direct access static method";
    }

    // public function __construct()
    // {
    //     self::message();
    // }
}

class antoherClass
{
    public function useStacticMethod()
    {
        StacicMethod::message();
    }
    public static $value = "15";
}
class extendClass extends antoherClass
{
    const MESSAGE = "This is constant value";
    public function useStacitPropertise()
    {
        echo self::MESSAGE;
        echo  parent::$value;
    }
}
// echo extendClass::MESSAGE;

$obj = new extendClass;
$obj->useStacitPropertise();


die();

echo antoherClass::$value; // static properties
// new StacicMethod();
$Object = new antoherClass();
$Object->useStacticMethod();
$Object->useStacticMethod();
