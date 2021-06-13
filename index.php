<?php

// echo "hello world";

//echo vs print
// The differences are small: 
// echo has no return value while print has a return value of 1 so it can be used in expressions. 
// echo can take multiple parameters (although such usage is rare) while print can take one argument. 
// echo is marginally faster than print.

//define("TITLE", "php");
// const X = 5;
// echo X;

// The basic difference between these two is that const defines constants at compile time, whereas define() defines them at run time.
// We can't use the const keyword to declare constant in conditional blocks, while with define() we can achieve that.
// const accepts a static scalar(number, string or other constants like true, false, null, __FILE__), whereas define() takes any expression.
// consts are always case sensitive, whereas define() allows you to define case insensitive constants by passing true as the third argument.
// const can also be utilized within a class or interface to declare a class constant or interface constant, while define() can't be utilized for this reason

// $x = 5;
// echo var_dump($x);
// echo gettype($x);

// $x = [1, 2, 3];
// $x = array(1, 2, 3);
// print_r($x);

// php contains elseif keyword also else if works

// regex

// $str = "ITi";
// echo preg_match("/i/i", $str);
// echo preg_match_all("/t/i", $str);
// echo preg_replace("/i/i", "*", $str);
// echo preg_filter("/i/i", "*", $str);

// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// $people = preg_replace("/[aeiou]/i", "*", $people);
// print_r($people);

//array methods

// in_array
// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// echo in_array("Glenn", $people) ? 'yes' : 'no';

// array_search
// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// echo array_search("Glenn", $people); //return index

// array_keys to return keys
// $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
// print_r(array_keys($a));

// array_map

// function myfunction($v) { return($v * $v); }
// $a = array(1, 2, 3, 4, 5);
// print_r(array_map("myfunction", $a));

// $arr = ['a', 'b', 'c'];
// array_push($arr, 'd');
// array_unshift($arr, 'z');
// print_r($arr);
// array_pop($arr);
// array_shift($arr);
// print_r($arr);

//sort

// $cars = array("Volvo","BMW","Toyota");
// sort($cars);

// $arr=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// ksort($arr);
// krsort($arr);
// print_r($arr);

// $arr=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// asort($arr);
// arsort($arr);
// print_r($arr);

//slice

// $a = array("red","green","blue","yellow","brown");
// print_r(array_slice($a, 2, 1));

// $a = array("red","green","blue","yellow","brown");
// array_splice($a, 2, 2, 'xx');
// print_r($a);

// $a = array(5, 15, 25);
// echo array_sum($a);

// function test_odd($var)
// {
//   return ($var & 1);
//   //return ($var % 2 != 0);
// }

// $a1=array(1, 3, 2, 3, 4);
// print_r(array_filter($a1, "test_odd"));

// $a = array(5, 5, 5);
// echo(array_sum($a));
// echo(array_product($a));

//string methods

// $str = "Hello world. It's a beautiful day.";
// $arr = explode(" ", $str);
// print_r ($arr);
// $str2 = implode("-", $arr);
// $str2 = join("-", $arr);
// echo $str2;

//echo strlen("php");

//print_r(str_split("Hello", 2));

//echo str_word_count("hello from other side");

// echo strrev("Hello World!");

// echo substr("Hello world", 6, 2);

// echo strpos("I love php, I love php too!","php");

// echo strcmp("Hello world!","Hello world!");

// echo str_replace("world","Peter","Hello world!");

// parse_str("name=Peter&age=43");
// echo $name."<br>";
// echo $age;

// echo nl2br("One line.\nAnother line.");

// echo sha1('123456');
// echo md5('123456');

