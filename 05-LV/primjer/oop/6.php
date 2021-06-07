<?php

abstract class Person
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function greet();
}

class Me extends Person
{
    public function greet()
    {
        return "Hello from {$this->name} - class Lule <br>";
    }
}

class Him extends Person
{
    public function greet()
    {
        return "Hello from {$this->name} - class Mirko <br>";
    }
}

$lule = new Me("lule");
$mirko = new Him("mirko");

echo $lule->greet();
echo $mirko->greet();
