<?php

/**
 * 1 ---------------------------------------------
 */

// Interface Person
// {
//     public function __construct($name);
//     public function greet();
// }

// class Me implements Person
// {
//     public $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function greet()
//     {
//         return  "Hello from {$this->name}";
//     }
// }


// $person = new Me("Lule");
// echo $person->greet();


/**
 * 2 ---------------------------------------------
 */

// interface PersonInterface
// {
//     public function greet();
// }


// abstract class Person
// {
//     public $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     abstract public function greet();
// }


// class Me extends Person implements PersonInterface
// {
//     public $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function greet()
//     {
//         return  "Hello from {$this->name}";
//     }
// }


// $person = new Me("Mirko");
// echo $person->greet();
