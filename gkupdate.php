<?php
$link = mysqli_connect("localhost","root","", "fixnix");

$id = $_REQUEST['id1'];
$area = $_REQUEST['area'];
$country=$_REQUEST['country'];
$state=$_REQUEST['state2'];
$city = $_REQUEST['cities'];

	
$result = mysqli_query($link, "UPDATE `location` SET `area`='$area',`city`='$city',`state`='$state',`country`='$country' WHERE `id`='$id'");

mysqli_close($link);
?>		