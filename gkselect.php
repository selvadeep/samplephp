<?php
$link = mysqli_connect("localhost","root","root", "fixnix");

$result = mysqli_query($link, "SELECT * FROM location");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
$obj=new stdClass(); 
$obj->id=$row["id"];
$obj->area=$row["area"];
$obj->country=$row["country"];
$obj->city=$row["city"];
$obj->state=$row["state"];
array_push($array,$obj);        
	}
echo json_encode($array);
mysqli_close($link);
?>