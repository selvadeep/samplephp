<?php
$link = mysqli_connect("localhost","root","root", "fixnix");
$name=$_GET['country'];
//$name="india";
$array = array();
$result = mysqli_query($link, "SELECT DISTINCT state FROM country WHERE country ='$name'");
while ($row = mysqli_fetch_array($result)) 
{
        $obj=new stdClass();
        $obj->state=$row["state"];
        array_push($array,$obj);      
}
echo json_encode($array);
mysqli_close($link);
?>