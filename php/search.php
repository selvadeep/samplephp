<?php
include "../config.php";

$areasearch = $_GET['areasearch'];
$streetsearch = $_GET['streetsearch'];
$status = $_GET['status'];


if($areasearch != '' && ($streetsearch =='' && $status ==''))
{
  $result = mysqli_query($link, "SELECT * FROM cableconnect where place = '$areasearch' ");  
  $array = array();
    
  while ($row = mysqli_fetch_array($result)) {
       
            $obj=new stdClass(); 
            $obj->street=$row["street"];
            $obj->place=$row["place"]; 
            $obj->mobile_no=$row["mobile_no"]; 
            $obj->address=$row["address"];
            $cableid =$row["cable_id"];
      
       $result1 = mysqli_query($link, "SELECT * FROM payment where cable_id ='$cableid' ");
      
       while ($row1 = mysqli_fetch_array($result1)) {
       
           
           $obj1=new stdClass();
           $obj1->cable_id=$row1["cable_id"];
           $obj1->name=$row1["name"]; 
           $obj1->installation_due=$row1["installation_due"];
           $obj1->payment_due=$row1["payment_due"];
      
           $obj_merged = (object) array_merge((array) $obj1, (array) $obj);
           array_push($array,$obj_merged);
    
}    
}
}

 else if($areasearch != '' && ($streetsearch !='' && $status !=''))
{
    
if($status == 'paid')
{
    
    $result = mysqli_query($link, "SELECT * FROM cableconnect where street = '$streetsearch' AND place = '$areasearch'");  
    $array = array();
    
  while ($row = mysqli_fetch_array($result)) {
       
       
       $cableid =$row["cable_id"];
      
      $result1 = mysqli_query($link, "SELECT * FROM payment where cable_id ='$cableid' AND payment_due < '0' ");
  
      while ($row1 = mysqli_fetch_array($result1)) {
   
          $obj1=new stdClass();
          $obj1->cable_id=$row1["cable_id"];
          $obj1->name=$row1["name"]; 
          $obj1->installation_due=$row1["installation_due"];
          $obj1->payment_due=$row1["payment_due"];
          $cable =$row1["cable_id"];
          
          $result2 = mysqli_query($link, "SELECT * FROM cableconnect where cable_id ='$cable'");
     while ($row2 = mysqli_fetch_array($result2)) {
          
         $obj2=new stdClass(); 
         $obj2->street=$row2["street"];
         $obj2->place=$row2["place"]; 
         $obj2->mobile_no=$row2["mobile_no"]; 
         $obj2->address=$row2["address"];
   
         $obj_merged = (object) array_merge((array) $obj1, (array) $obj2);
          array_push($array,$obj_merged);
    

}
}
}
}
     else if($status == 'unpaid')
{
    
    $result = mysqli_query($link, "SELECT * FROM cableconnect where street = '$streetsearch' AND place = '$areasearch'");  
    $array = array();
    
  while ($row = mysqli_fetch_array($result)) {
       
       
       $cableid =$row["cable_id"];
      

    
      $result1 = mysqli_query($link, "SELECT * FROM payment where cable_id ='$cableid' AND payment_due > '0' ");
  
      while ($row1 = mysqli_fetch_array($result1)) {
   
          $obj1=new stdClass();
          $obj1->cable_id=$row1["cable_id"];
          $obj1->name=$row1["name"]; 
          $obj1->installation_due=$row1["installation_due"];
          $obj1->payment_due=$row1["payment_due"];
          $cable =$row1["cable_id"];
          
          $result2 = mysqli_query($link, "SELECT * FROM cableconnect where cable_id ='$cable'");
     while ($row2 = mysqli_fetch_array($result2)) {
          
         $obj2=new stdClass(); 
         $obj2->street=$row2["street"];
         $obj2->place=$row2["place"]; 
         $obj2->mobile_no=$row2["mobile_no"]; 
         $obj2->address=$row2["address"];
   
         $obj_merged = (object) array_merge((array) $obj1, (array) $obj2);
          array_push($array,$obj_merged);
    

}
}
}
}

}

else if($areasearch != '' && ($streetsearch =='' && $status !=''))
  {  
    if($status == 'paid')
{
    
    $result = mysqli_query($link, "SELECT * FROM cableconnect where  place = '$areasearch'");  
    $array = array();
    
  while ($row = mysqli_fetch_array($result)) {
       
       
       $cableid =$row["cable_id"];
      

    
      $result1 = mysqli_query($link, "SELECT * FROM payment where cable_id ='$cableid' AND payment_due < '0' ");
  
      while ($row1 = mysqli_fetch_array($result1)) {
   
          $obj1=new stdClass();
          $obj1->cable_id=$row1["cable_id"];
          $obj1->name=$row1["name"]; 
          $obj1->installation_due=$row1["installation_due"];
          $obj1->payment_due=$row1["payment_due"];
          $cable =$row1["cable_id"];
          
          $result2 = mysqli_query($link, "SELECT * FROM cableconnect where cable_id ='$cable'");
     while ($row2 = mysqli_fetch_array($result2)) {
          
         $obj2=new stdClass(); 
         $obj2->street=$row2["street"];
         $obj2->place=$row2["place"]; 
         $obj2->mobile_no=$row2["mobile_no"]; 
         $obj2->address=$row2["address"];
   
         $obj_merged = (object) array_merge((array) $obj1, (array) $obj2);
          array_push($array,$obj_merged);
    

}
}
}
}
     else if($status == 'unpaid')
{
    
    $result = mysqli_query($link, "SELECT * FROM cableconnect where  place = '$areasearch'");  
    $array = array();
    
  while ($row = mysqli_fetch_array($result)) {
       
       
       $cableid =$row["cable_id"];
      

    
      $result1 = mysqli_query($link, "SELECT * FROM payment where cable_id ='$cableid' AND payment_due > '0' ");
  
      while ($row1 = mysqli_fetch_array($result1)) {
   
          $obj1=new stdClass();
          $obj1->cable_id=$row1["cable_id"];
          $obj1->name=$row1["name"]; 
          $obj1->installation_due=$row1["installation_due"];
          $obj1->payment_due=$row1["payment_due"];
          $cable =$row1["cable_id"];
          
          $result2 = mysqli_query($link, "SELECT * FROM cableconnect where cable_id ='$cable'");
     while ($row2 = mysqli_fetch_array($result2)) {
          
          $obj2=new stdClass(); 
          $obj2->street=$row2["street"];
          $obj2->place=$row2["place"]; 
          $obj2->mobile_no=$row2["mobile_no"]; 
          $obj2->address=$row2["address"];
   
         $obj_merged = (object) array_merge((array) $obj1, (array) $obj2);
          array_push($array,$obj_merged);
    

}
}
}
}
}
else if($status != '' && ($streetsearch =='' && $areasearch ==''))
{
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

        $obj->street=$row["street"];
        $obj->place=$row["place"]; 
        $obj->mobile_no=$row["mobile_no"];
        $obj->address=$row["address"];
  
    $obj_merged = (object) array_merge((array) $obj1, (array) $obj);
array_push($array,$obj_merged);
}
}
}
}

else if( ($areasearch !='' && $streetsearch !='' ) && $status == '')
{
    $result = mysqli_query($link, "SELECT * FROM cableconnect where place = '$areasearch' AND street = '$streetsearch'");  
  $array = array();
    
  while ($row = mysqli_fetch_array($result)) {
       
            $obj=new stdClass(); 
            $obj->street=$row["street"];
            $obj->place=$row["place"]; 
            $obj->mobile_no=$row["mobile_no"]; 
            $obj->address=$row["address"];
            $cableid =$row["cable_id"];
      
       $result1 = mysqli_query($link, "SELECT * FROM payment where cable_id ='$cableid' ");
      
       while ($row1 = mysqli_fetch_array($result1)) {
       
           
           $obj1=new stdClass();
           $obj1->cable_id=$row1["cable_id"];
           $obj1->name=$row1["name"]; 
           $obj1->installation_due=$row1["installation_due"];
           $obj1->payment_due=$row1["payment_due"];
      
           $obj_merged = (object) array_merge((array) $obj1, (array) $obj);
           array_push($array,$obj_merged);
    
}    
}       
}

echo json_encode($array);
mysqli_close($link);
?>











