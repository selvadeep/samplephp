<?php
include "../config.php";



$result1 = mysqli_query($link, "SELECT * FROM complaints ");
    $array = array();
while ($row1 = mysqli_fetch_array($result1)) {
   
    $obj1=new stdClass();
$obj1->complaints=$row1["complaints"];
$obj1->complained_date=$row1["complained_date"];    
$obj1->verified=$row1["verified"];
$obj1->verified_date=$row1["verified_date"];
$cableid =$row1["cable_id"]; 
    
    
    $result = mysqli_query($link, "SELECT * FROM cableconnect where cable_id ='$cableid' ");
    
    
while ($row = mysqli_fetch_array($result)) {
       
   
    $obj=new stdClass();
$obj->cable_id=$row["cable_id"];    
$obj->name=$row["name"]; 
$obj->street=$row["street"];
$obj->place=$row["place"]; 
$obj->mobile_no=$row["mobile_no"];
$obj->address=$row["address"];
  
    $obj_merged = (object) array_merge((array) $obj, (array) $obj1);
array_push($array,$obj_merged);
    
 }
}


echo json_encode($array);
mysqli_close($link);
?>