<?php
include "../config.php";

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}



$id =  $_POST['id'];
$name =  $_POST['name'];

$degree = $_POST['degree'];

$dept =  $_POST['dept'];



mysqli_query($link, "insert into department(id,name,degree,dept)values ('$id','$name','$degree','$dept')");


mysqli_close($link);
?>