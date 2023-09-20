<?php
//We can achive abstration with abstact and interface
//Abstract 
//Define abstract we need abstract keyword before className
// abstract metthod and properties will be public and protected not private
// child class extends to parent class
// can't create object in abstract class

// abstract class PaymentGateway
// {
//     // const VALUE = "PaymentGateway";

//     abstract public function accountNumber($number);

//     public function accountUser()
//     {
//     }
//     public function password()
//     {
//     }
//     public function amount()
//     {
//     }
// }

// class Bkash extends PaymentGateway
// {
//     public function accountNumber($number = 300)
//     {
//         return $number;
//     }
// }
// $Object = new Bkash();
// echo $Object->accountNumber();
// // echo Bkash::VALUE;



//Interface

interface PaymentGateway
{
    public function accountNumber();

    public function accountUser();

    public function password();

    public function amount();
}
interface AtmBooth
{
    public function hasBranch();
}

class Bkash implements PaymentGateway, AtmBooth
{

    public function accountNumber()
    {
    }

    public function accountUser()
    {
    }
    public function hasBranch()
    {
        echo "hasBranch";
    }

    public function password()
    {
    }

    public function amount()
    {
    }
}


$Object = new Bkash();
echo $Object->hasBranch();
