
<?php
include "../config.php";




$result = mysqli_query($link, "SELECT * from cableconnect");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
$obj=new stdClass();
    
$obj->id=$row["id"];
$obj->cable_id=$row["cable_id"];
$obj->name=$row["name"];
$obj->area=$row["area"];
$obj->address=$row["address"];
$obj->mobile_no=$row["mobile_no"];
$obj->email_id=$row["email_id"];
$obj->activation_date=$row["activation_date"];
$obj->stb_no=$row["stb_no"];
$obj->vc_model=$row["vc_model"];
$obj->connection_status=$row["connection_status"];

array_push($array,$obj);        
}
echo json_encode($array);
mysqli_close($link);
?>





