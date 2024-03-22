<?php

class Man
{
    private $name;
    private $birthday;
    public $city;
    public $age;


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setBirthday($year)
    {
        $this->birthday = $year;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function sayHello()
    {
        print_r("Hello! My name is $this->name and I'm $this->age years old.\n");
        // print_r("Hello! My name is " . $this->name . "and I'm " . $this->age . " years old.\n");
    }
}


$fist_man = new Man('Ivan', 30);
// $fist_man->name = 'Ivan';
$fist_man->age = 35;
print_r($fist_man->getName() . "\n");
$fist_man->sayHello();
$fist_man->setBirthday(1970);

print_r("First man name is " . $fist_man->getName() . "\n");
print_r("First man age is " . $fist_man->getAge() . "\n");
print_r("First man birthday year is " . $fist_man->getBirthday() . "\n");


$second_man = new Man('Andrey', 25);
// $second_man->name = 'Sergey';
// $second_man->age = 25;
$second_man->sayHello();


// var_dump($fist_man);
// var_dump($second_man);
