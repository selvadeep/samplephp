<?php
include "../config.php";

$area = $_POST['area'];
$city =  $_POST['cities'];
$state =  $_POST['state'];
$country =  $_POST['country'];

$result=mysqli_query($link, "insert into Place (place,city,state,country) values ('$area','$city','$state','$country')")  or die(mysqli_error($link));




if($result)
{
}
mysqli_close($link);
?>