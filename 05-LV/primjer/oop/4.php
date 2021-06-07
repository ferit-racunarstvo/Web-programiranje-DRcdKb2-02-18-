<?php

/**
 * 1 ---------------------------------------------
 */


// class Person
// {
//     public $name;
//     public $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     public function introduce()
//     {
//         echo "My name is {$this->name}. My age is {$this->age}";
//     }
// }


// class Lule extends Person
// {
//     public function hello()
//     {
//         echo "Hello, from me <br>";
//     }
// }

// $lule = new Lule('Lule', 27);
// $lule->hello();
// $lule->introduce();

/**
 * 2 ---------------------------------------------
 */

// class Person
// {
//     protected $name;
//     private $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     protected function introduce()
//     {
//         echo "My name is {$this->name}. My age is {$this->age}";
//     }
// }


// class Lule extends Person
// {
//     public function hello()
//     {
//         echo "Hello, from me <br>";
//     }
// }

// $lule = new Lule('Lule', 27);
// $lule->hello();
// $lule->introduce();

/**
 * 3 ---------------------------------------------
 */

// class Person
// {
//     protected $name;
//     private $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     protected function parentMethod()
//     {
//         echo "Hello from parrent method <br> <br>";
//     }

//     protected function introduce()
//     {
//         echo "My name is {$this->name}. My age is {$this->age}";
//     }
// }


// class Lule extends Person
// {
//     public function __construct($name, $age, $school)
//     {
//         $this->name = $name; // ili parent::__construct($name, age);
//         $this->age = $age;   // ili parent::__construct($name, age);
//         $this->school = $school;
//     }

//     public function introduce()
//     {
//         echo "My name is {$this->name}. My age is {$this->age}. I go to {$this->school} <br>";
//     }

//     public function childMethod()
//     {
//         parent::parentMethod();
//     }
// }

// $lule = new Lule('Lule', 27, "FERIT");
// $lule->introduce();
// $lule->childMethod();
