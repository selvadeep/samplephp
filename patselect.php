<?php
$link = mysqli_connect("localhost","root","root", "fixnix");

$result = mysqli_query($link, "SELECT * FROM patient");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
$obj=new stdClass(); 
$obj->id=$row["id"];
$obj->name=$row["patname"];
$obj->email=$row["patmail"];
$obj->patmobile=$row["mobilenumber"];
$obj->hospital=$row["hospital"];
$obj->doctor=$row["patdoctor"];
	  array_push($array,$obj); 
  
}
echo json_encode($array);
mysqli_close($link);
?>