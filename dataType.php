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
