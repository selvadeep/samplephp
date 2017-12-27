<?php
$link = mysqli_connect("localhost","root","root", "fixnix");

$result = mysqli_query($link, "SELECT * FROM doctor");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
$obj=new stdClass(); 
$obj->id=$row["id"];
$obj->name=$row["docname"];
$obj->email=$row["docemail"];
$obj->mobnumber=$row["docphone"];
$obj->hospital=$row["hospital"];
$nam=$row["location"];


$location34 = mysqli_query($link, "SELECT * FROM location where id='$nam'");
  while($row56 = mysqli_fetch_array($location34))
  {

  		$area=$row56["area"];
  		$obj->area=$area;
	  	$city=$row56["city"];
	  	$obj->city=$city;
	  	$state=$row56["state"];
	  	$obj->state=$state;
	  	$country=$row56["country"];
	  	$obj->country=$country;

  }
	  array_push($array,$obj); 
  
}
echo json_encode($array);
mysqli_close($link);
?>