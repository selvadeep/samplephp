<?php
$link = mysqli_connect("localhost","root","", "fixnix");

$result = mysqli_query($link, "SELECT * FROM admin");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
$obj=new stdClass(); 
$obj->id=$row["id"];
$obj->name=$row["name"];
$obj->email=$row["email"];

array_push($array,$obj);        
	}
echo json_encode($array);
mysqli_close($link);
?>