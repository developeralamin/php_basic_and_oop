<?php
trait Message1
{
    public $name = "Dog";
}

class useMessage
{
    use Message1;
}
class useAnotherMessage
{
    use Message1;
}

$object = new useMessage();
$object2 = new useAnotherMessage();
var_dump($object);
var_dump($object->name);
var_dump($object2->name);
