<?php

// 1- test odd

// function test_odd($var)
// {
//   return ($var & 1);
//   //return ($var % 2 != 0);
// }

// $a1=array(1, 3, 2, 3, 4);
// print_r(array_filter($a1, "test_odd"));


// 2- remove vowel from array element

// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// $people = preg_replace("/[aeiou]/i", "*", $people);
// print_r($people);


// 3- reverse number

// $num = 123456;
// $revnum = 0;
// while ($num > 1)
// {
//     $rem = $num % 10;
//     $revnum = ($revnum * 10) + $rem;
//     $num = ($num / 10);
// }
// echo "Reverse number of 123456 is: $revnum";


// $num = 123456;
// $revnum = (int) (strrev((string) $num));
// echo "Reverse number of 123456 is: $revnum";

// 4- largest swap if fisrt digit > second digit
// $num = 54;
// echo $num >= (int) strrev($num);

// 5- captilize first char in array

// function capMe($arr) {
//     return array_map('ucfirst', array_map('strtolower', $arr));
// }
// print_r(capMe(["ahmed", "mahmoud"]));

// 6- return factorial

// function factorial($int) {
// 	return $int <= 1 ? 1 : $int * factorial($int - 1);
// }
// echo factorial(5);

// 7- count of vowels

// function countVowel($string) {
//     return preg_match_all('/[aeiou]/i', $string);
// }
// echo countVowel("ahmed");

// 8- implement strrev

//the same string
// function strrev2($str)
// {
//     $len = strlen($str);
//     for($i = 0; $i < $len / 2; $i++)
//     {
//         $tmp = $str[$i];
//         $str[$i] = $str[$len - $i - 1];
//         $str[$len - $i - 1] = $tmp;
//     }
//     return $str;
// }
// echo strrev2("Hello World!");

//different string
// function strrev3($str)
// {
//     $strrev = '';
//     for ($i = strlen($str) - 1; $i >= 0; $i--) {
//         $strrev .= $str[$i];
//   }
//     return $strrev;
// }
// echo strrev3("Hello World!");

//check palindrome
// function checkPalindrome($str)
// {
//     $strrev = '';
//     for ($i = strlen($str) - 1; $i >= 0; $i--) {
//         $strrev .= $str[$i];
//   }
//     return $str === $strrev ? "palindrome" : "not";
// }
// echo checkPalindrome("xhx");


// hash email after @

// $email = "ahmed@mail.com";
// for($i = strpos($email, "@") + 1; $i < strlen($email); $i++) {
//     $email[$i] = '#';
// }
// echo $email;

// $email = "ahmed@mail.com";
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $arr = explode('@', $email);
//     $arr[1] = str_repeat('#', strlen($arr[1]));
//     $email = implode("@", $arr);
//     echo $email;
// } else {
//     echo "Invalid email";
// }


// merge to array unique with functions

// $arr1 = [1, 2, 3, 2, 5];
// $arr2 = [2, 6, 7, 1];
// $array = array_unique (array_merge ($arr1, $arr2));
// print_r($array);

// merge to array unique with out functions

// $manyArrays = [
//     [1, 2, 3, 2, 5],
//     [2, 6, 7, 1]
// ];
// $uniques = [];
// foreach($manyArrays as $arr ) {
//   foreach($arr as $v) {
//     if( !in_array($v, $uniques, false) ) {
//       $uniques[] = $v;
//     }
//   }
// }
// print_r($uniques);


// find some between range

// function sumRange($arr, $int1, $int2) {
//     if ($int1 > $int2)
//         return -1;
//     else if ($int1 < 0 || $int2 < 0)
//         return 0;
//     else if ($int2 > max($arr))
//         return -2;
//     else {
//         $sum = 0;
//         foreach ($arr as $a) {
//             if ($a >= $int1 && $a <= $int2) {
//                $sum += $a;
//             }
//          }
//          return $sum;
//     }
// }

// echo sumRange([10, 20, 30, 40], 15, 45);

// StdClass test

// $student = new StdClass();           
// $student->name = "bassam";
// $student->subjects = ['s1', 's2', 's3'];
// $student->grades   = [80, 90, 69];
// $student->evaluations = array('math' => 80,'Logic1' => 70);
// $student->point = 0;    //intial value
// var_dump(json_encode($student));
// foreach($student->grades as &$grade){
//     if($grade > 85){
//         $grade += 20;
//     }else if( $grade > 75 && $grade <= 85){
//         $grade += 10;
//     }else if($grade > 65 && $grade <= 75){
//         $grade += 5;
//     }
// }
// var_dump(json_encode($student));
