<?php
//indexed Array

$name = array("jeet", "vikas", "rahul");
$length = count($name);

for ($x = 0; $x < $length; $x++) {
    echo "Username: " . $name[$x] . "<br>";
}
echo "<br>";

//Associative array

$car = array("Brand" => "BMW", "Color" => "Blue", "Year" => "2023");
// echo $car['Color'];
foreach ($car as $new => $Details) {
    echo "New : " . $new . " Details : " . $Details . "<br>";
}
echo "<br>";

//multi array

$age = array(
    array("Jeet", 26),
    array("Rahul", 28),
    array("Raja", 30),
);
$count = count($age);
?>


<table>
    <tr>
        <th>name</th>

    </tr>
    <?php
    for ($row = 0; $row < $count; $row++) {
        for ($col = 0; $col <= 1; $col++) {


    ?>

            <tr>
                <td><?php echo $age[$row][$col]; ?></td>


            </tr>
    <?php
        }
    }
    ?>
</table>


<!-- sort in array -->
<br>
<?php

$studentName = array("rahul","ajay","vikas","raj");
sort($studentName);
$length = count($studentName);
for($i = 0;$i < $length; $i++){
    echo $studentName[$i]."<br>";
    
}
echo "<br>";
rsort($studentName);
$length = count($studentName);
for($i = 0;$i < $length; $i++){
    echo $studentName[$i]."<br>";
    
}
echo "<br>";

$emp = array("raj"=>"24","vimal"=>"21","ajay"=>"25");
asort($emp);
foreach($emp as $key => $value){
    echo $key." => ".$value;
    echo "<br>";

}
echo "<br>";
ksort($emp);
foreach($emp as $key => $value){
    echo $key ." => ".$value;
    echo "<br>";
}

echo "<br>";

?>