<?php
//While loop

$n = 1;
while($n <= 10){   
echo $n;
$n++;
}
echo "<br>";
//do while
$i = 1;
do{
    
    echo $i;
    $i++;
}while($i <= 10);
echo "<br>";

//for loop

for($in = 1; $in <= 10; $in++){
    if($in == 5){
        continue;
    }
    echo $in;
}
echo "<br>";

//foreach

$name = array("sone","preetu","laddu");
foreach($name as $username){
    echo "Username: $username <br>";
}

