<?php
include "../config.php";

$street = $_POST['street'];
$state =  $_POST['state'];
$city =  $_POST['city'];
$place =  $_POST['place'];

mysqli_query($link, "insert into Street (streetname,place,city,state) values ('$street','$place','$city','$state')");

/*$result = mysqli_query($link, "update payment set payment_due = payment_due-$amount where cable_id = '$cableId'");*/


if($result)
{
}
mysqli_close($link);
?>