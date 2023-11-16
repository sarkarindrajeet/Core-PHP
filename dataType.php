<?php
// String,Integer,Float,Boolean,Array,object,null,resource

$name = "Indrajeet"; //string
echo $name;
echo "<br>";
var_dump($name);
echo "<br>";
echo strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo str_replace("Indrajeet" ,"Jeet", $name);
echo "<br>";
echo "<br>";

$num = 3445; //integer
echo $num;
echo "<br>";
var_dump($num);
echo "<br>";
echo "<br>";

$floatNum = 3.4; //float
echo $floatNum;
echo "<br>";
var_dump($floatNum);
echo "<br>";
echo "<br>";

$a = 10;
$b = 20;
$bool = $a > $b; //boolean
echo $bool;
var_dump($bool);
echo "<br>";
echo "<br>";


$student = array("Jeet", "Rahul", "Akash", "Rohit"); //array
print_r($student);
echo "<br>";
echo "<br>";

$x = "hello";
$x = null;
echo $x;
var_dump($x);
echo "<br>";
echo "<br>";


//Maths

$pi = pi();
echo $pi;
echo "<br>";
$number = array(10, -20, 100,200);
echo min($number);
echo "<br>";
echo max($number);
echo "<br>";
$abs = -12.400;
echo abs($abs);
echo "<br>";
echo sqrt(64);
echo "<br>";
echo rand(1,100);
echo "<br>";
define("name", "this is me indrajeet!!");
echo name;
echo "<br>";
const Name = "Indrajeet";
echo Name;



