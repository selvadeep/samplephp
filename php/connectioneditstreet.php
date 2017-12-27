<?php
include "../config.php";

$name=$_GET['areaName'];
$array = array();
$result = mysqli_query($link, "SELECT * FROM Street WHERE place = '$name'");
while ($row = mysqli_fetch_array($result)) 
{
       $obj=new stdClass();
       $obj->name=$row["streetname"];
       array_push($array,$obj);      
}
echo json_encode($array);
mysqli_close($link);
?>