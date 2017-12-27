<?php
include "../config.php";




$result = mysqli_query($link, "SELECT * from department");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
$obj=new stdClass();
$obj->id=$row["id"];
$obj->name=$row["name"];
$obj->degree=$row["degree"];
$obj->dept=$row["dept"]; 



array_push($array,$obj);        
	}
echo json_encode($array);
mysqli_close($link);
?>