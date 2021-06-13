<?php

// class Person {
//     private $name;
//     private $age;
//     private static $count = 0;

//     public function __construct($n, $a)
//     {
//         $this->name = $n;
//         $this->age = $a;
//         self::$count++;
//     }

//     public function getAttr() {
//         return ($this->name . "-" . $this->age);
//     }

//     public static function getCount() {
//         return self::$count;
//     }
// }

// $p1 = new Person("ahmed", 10);
// echo $p1->getAttr();
// echo "<br>";
// echo Person::getCount();

//overloading in php - not direct way
// class shape {
      
//     function __call($name_of_function, $arguments) {
//         if($name_of_function == 'area') {
//             switch (count($arguments)) {
//                 case 1:
//                     return 3.14 * $arguments[0];
//                 case 2:
//                     return $arguments[0] * $arguments[1];
//             }
//         }
//     }
// }

// $s = new Shape;
// echo($s->area(2));
// echo "\n";
// echo ($s->area(2, 4));



// trying namespace and autoload


// spl_autoload_register(function($class) {
//     require $class . ".php";
// });

// use namespacetest\test\User;

// $user = new User("ahmed", "ahmed@mail.com");
// print_r($user);

