<?php
include "../config.php";

$name=$_GET['cityName'];
$array = array();
$result = mysqli_query($link, "SELECT DISTINCT city FROM Place WHERE place ='$name'");
while ($row = mysqli_fetch_array($result)) 
{
        $obj=new stdClass();
        $obj->name=$row["city"];
        array_push($array,$obj);      
}
echo json_encode($array);
mysqli_close($link);
?>                  

