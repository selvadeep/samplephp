<?php
include "../config.php";

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
$id = $_POST['id'];
$area =  $_POST['place'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];

$result = mysqli_query($link, "update Place set  place = '$area',city ='$city',state ='$state', country ='$country' where id = '$id'");


if($result)
{
}
mysqli_close($link);
?>