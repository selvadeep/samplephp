<?php
$link = mysqli_connect("localhost","root","root", "fixnix");

$name=$_GET['state'];
$array = array();
$result = mysqli_query($link, "SELECT DISTINCT city FROM country WHERE state = '$name'");
while ($row = mysqli_fetch_array($result)) 
{
        $obj=new stdClass();
        $obj->name=$row["city"];
        array_push($array,$obj);      
}
echo json_encode($array);
mysqli_close($link);
?>