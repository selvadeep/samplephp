<?php
include "../config.php";

$dept = $_POST['dept'];

$result = mysqli_query($link, "SELECT * from userdetails WHERE dept='$dept'");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
$obj=new stdClass();
    
$obj->id=$row["id"];
$obj->name=$row["name"];
$obj->cable_id=$row["cable_id"];
$obj->email_id=$row["email_id"];
$obj->password=$row["password"];
$obj->dob=$row["dob"];
$obj->img=$row["img"];
    
$obj->dept=$row["dept"];
    
array_push($array,$obj);        
}
echo json_encode($array);
mysqli_close($link);
?>
