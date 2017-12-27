<?php
$link = mysqli_connect("localhost","root","root", "fixnix");

$area = $_REQUEST['area'];
$country=$_REQUEST['country'];
$state=$_REQUEST['state'];
$city = $_REQUEST['city'];

$result = mysqli_query($link, "INSERT INTO `location`(`area`,`city`,`state`,`country`) VALUES ('$area','$city','$state','$country')");
mysqli_close($link);
?>