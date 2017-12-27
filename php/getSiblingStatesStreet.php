<?php
include "../config.php";


$name=$_GET['stateName'];
$array = array();
$result = mysqli_query($link, "SELECT * FROM Street WHERE city ='$name'");
while ($row = mysqli_fetch_array($result)) 
{
        $obj=new stdClass();
        $obj->name=$row["state"];
        array_push($array,$obj);      
}
echo json_encode($array);
mysqli_close($link);
?>