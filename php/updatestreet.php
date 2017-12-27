<?php
include "../config.php";
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
$id = $_POST['id'];
$street =  $_POST['street'];
$area = $_POST['area'];
$city = $_POST['city'];
$state = $_POST['state'];

$result = mysqli_query($link, "update Street set streetname ='$street', place = '$area',city ='$city',state ='$state' where id = '$id'");


if($result)
{
}
mysqli_close($link);
?>