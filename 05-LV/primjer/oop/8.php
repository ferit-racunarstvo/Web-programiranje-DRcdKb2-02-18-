<?php

/**
 * 1 ---------------------------------------------
 */

// class WelcomeGenerator
// {
//     const ENGLISH = 'Hello';

//     public function greet()
//     {
//         echo self::ENGLISH;
//     }
// }

// $myGenerator = new WelcomeGenerator();
// $myGenerator->greet();

/**
 * 2 ---------------------------------------------
 */

// class WelcomeGenerator
// {
//     const ENGLISH = 'Hello';

//     private static function greetInEnglish()
//     {
//         echo self::ENGLISH;
//     }

//     public static function greet()
//     {
//         echo self::greetInEnglish();
//     }
// }


// WelcomeGenerator::greet();

/**
 * 3 ---------------------------------------------
 */

// class WelcomeGenerator
// {
//     public static $greet = "Hello Guest !";

//     protected static function setGreet()
//     {
//         return self::$greet;
//     }
// }

// class Machine extends WelcomeGenerator
// {
//     public $welcomeMsg;

//     public function __construct()
//     {
//         $this->welcomeMsg =  parent::setGreet();
//     }
// }


// $machine = new Machine();
// echo $machine->welcomeMsg;

/**
 * 4 ---------------------------------------------
 */

// class User
// {
//     public $firstname;
//     public $lastname;

//     /**
//      * Constructor for User class
//      * 
//      * @param string $firstname - Firstname of the user
//      * @param string $lastname  - Lastname of the user
//      */
//     public function __construct($firstname, $lastname)
//     {
//         $this->firstname = self::filterName($firstname);
//         $this->lastname = self::filterName($lastname);
//     }

//     /**
//      * Filter username input
//      * 
//      * @param string $name - name to filter
//      * @return string - filtered name
//      */
//     static function filterName($name)
//     {
//         // remove surrounding whitespaces
//         $name = trim($name);
//         // remove non-latin and non-number characters
//         $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);

//         return $name;
//     }
// }
// $user = new User('Don ', '$Lule#$"#!');
// echo "{$user->firstname} {$user->lastname}";
