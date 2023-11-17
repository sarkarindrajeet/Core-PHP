<?php
$a = 2;
if ($a > 1) {
    echo "a is greater";
}

echo "<br>";

$age = 14;

if ($age >= 18) {
    echo "you can vote";
} else {
    echo "you are under age";
}
echo "<br>";

$user = "admin";

if($user == "user"){
    echo "User is login";
}elseif($user == "subadmin"){
    echo "Sub-Admin is login";
}elseif($user == "admin"){
    echo "Admin is login";
}
echo "<br>";

//Switch

$oprator = "*";

switch($oprator){
    case "+":
        echo 2+3;
        break;
    case "-":
        echo 2-3;
        break;
    case "*":
        echo 2*3;
        break;
    default:
        echo "Something went worng!";

}



