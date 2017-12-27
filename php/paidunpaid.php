<?php
include "../config.php";

$status = $_GET['status'];
//$status = 'unpaid';
if($status == 'paid')
{
$result1 = mysqli_query($link, "SELECT * FROM payment where payment_due < '0' ");
    $array = array();
while ($row1 = mysqli_fetch_array($result1)) {
   
    $obj1=new stdClass();
$obj1->cable_id=$row1["cable_id"];
$obj1->name=$row1["name"]; 
$obj1->installation_due=$row1["installation_due"];
$obj1->payment_due=$row1["payment_due"];

$cableid =$row1["cable_id"]; 
    
    
    $result = mysqli_query($link, "SELECT * FROM cableconnect where cable_id ='$cableid' ");
    
    
while ($row = mysqli_fetch_array($result)) {
       
   
    $obj=new stdClass();
//$obj->cable_id=$row["cable_id"];    
//$obj->name=$row["name"]; 
$obj->street=$row["street"];
$obj->place=$row["place"]; 
$obj->mobile_no=$row["mobile_no"];
$obj->address=$row["address"];
  
    $obj_merged = (object) array_merge((array) $obj1, (array) $obj);
array_push($array,$obj_merged);
    
 }
}
}
else 
{
  $result1 = mysqli_query($link, "SELECT * FROM payment where payment_due > '0' "); 
    $array = array();
while ($row1 = mysqli_fetch_array($result1)) {
   
    $obj1=new stdClass();
$obj1->cable_id=$row1["cable_id"];
$obj1->name=$row1["name"]; 
$obj1->installation_due=$row1["installation_due"];
$obj1->payment_due=$row1["payment_due"];

$cableid =$row1["cable_id"]; 
    
    
    $result = mysqli_query($link, "SELECT * FROM cableconnect where cable_id ='$cableid' ");

    
while ($row = mysqli_fetch_array($result)) {
       
   
    $obj=new stdClass();
//$obj->cable_id=$row["cable_id"];
//$obj->name=$row["name"]; 
$obj->street=$row["street"];
$obj->place=$row["place"]; 
$obj->mobile_no=$row["mobile_no"];
$obj->address=$row["address"];
  
    $obj_merged = (object) array_merge((array) $obj1, (array) $obj);
array_push($array,$obj_merged);
}
}
 }
echo json_encode($array);
mysqli_close($link);
?>
