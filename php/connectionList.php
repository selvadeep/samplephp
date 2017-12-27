<?php
include "../config.php";




$result = mysqli_query($link, "SELECT * from userdetails");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
$obj=new stdClass();
$obj->id=$row["id"];
$obj->name=$row["name"];
$obj->street=$row["street"];
$obj->area=$row["area"];
$obj->mobile no=$row["mobile no"];
$obj->email_id=$row["email_id"];
$obj->activation date=$row["activation date"]; 
$obj->stb no=$row["stb no"]; 
$obj->vc model=$row["vc model"]; 
$obj->connection status=$row["connection status"]; 



array_push($array,$obj);        
	}
echo json_encode($array);
mysqli_close($link);
?>


