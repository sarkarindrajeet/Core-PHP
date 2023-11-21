<?php
class Exa
{
    public $name = "preetu";
    public $day_salary = 100000000;
    function __construct($name, $day)
    {
        echo "user name is $name and salary " . ($this->day_salary * $day) . "<br>";
    }
    function showUser()
    {
        return $this->name;
    }

    function setName($na)
    {
        $this->name = $na;
    }
    function getName()
    {
        return $this->name;
    }
}
$o1 = new Exa("preetu", 1);
