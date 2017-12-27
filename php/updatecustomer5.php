<?php
include "../config.php";



$id =  $_POST['id1'];
$name =  $_POST['name1'];
$degree = $_POST['degree1'];
$dept =  $_POST['dept1'];

$result= mysqli_query($link, "update department set name ='$name',degree ='$degree', dept='$dept' where id ='$id'");



mysqli_close($link);
?>