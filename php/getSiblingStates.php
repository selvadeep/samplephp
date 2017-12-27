<?php
include "../config.php";

$name=$_GET['countryName'];
$array = array();
$result = mysqli_query($link, "SELECT * FROM states WHERE country_id ='$name'");
while ($row = mysqli_fetch_array($result)) 
{
        $obj=new stdClass();
        $obj->name=$row["name"];
        array_push($array,$obj);      
}
echo json_encode($array);
mysqli_close($link);
?>