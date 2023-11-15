<?php
$name = "Hello world";
echo $name;
echo "<br>";

// add two num
$a = 10;
$b = 20;
echo "a + b = " . ($a + $b);
echo "<br>";

//scope variables
// global
// local
// static
$num = 10; // global variable
function age()
{
    global $num;
    echo "Rahul age is " . $num;
}
age();
echo "<br>";

function user()
{
    $username = "jeet"; //local variable 
    print "the user name is " . $username;
}
user();
echo "<br>";

function test()
{
    static $x = 0;
    print_r($x);
    $x++;
}
test();
echo "<br>";
test();
echo "<br>";
test();
