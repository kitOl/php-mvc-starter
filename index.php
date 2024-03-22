<?php

class Man
{
    public $name;
    public $city;
    public $age;


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello()
    {
        print_r("Hello! My name is $this->name and I'm $this->age years old.\n");
        // print_r("Hello! My name is " . $this->name . "and I'm " . $this->age . " years old.\n");
    }
}


$fist_man = new Man('Ivan', 30);
// $fist_man->name = 'Ivan';
// $fist_man->age = 30;
$fist_man->sayHello();

$second_man = new Man('Andrey', 25);
// $second_man->name = 'Andrey';
// $second_man->age = 25;
$second_man->sayHello();


// var_dump($fist_man);
// var_dump($second_man);
