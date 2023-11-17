<?php
//default function

function Test()
{
    echo "this is a function";
}
Test();
echo "<br>";

//function with argument

function newArg($name)
{
    echo "I like " . $name;
}
newArg("Preetu");
echo "<br>";

//function return

function newPara($a, $b)
{
    $num = $a * $b;
    echo $num;
    return $num;
}
newPara(2, 3);
