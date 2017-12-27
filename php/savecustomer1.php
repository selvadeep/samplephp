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

$cable_id = $_POST['cable_id'];

$email_id =  $_POST['email_id'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$img = $_POST['img'];
$dept =  $_POST['dept'];


mysqli_query($link, "insert into userdetails (id,name,cable_id,email_id,password,dob,img,dept)values ('$id','$name','$cable_id','$email_id','$password','$dob','$img','$dept')");


mysqli_close($link);
?>