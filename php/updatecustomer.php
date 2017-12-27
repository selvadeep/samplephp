<?php
include "../config.php";



$name =  $_POST['name1'];
$cable_id = $_POST['cable_id1'];
$street =  $_POST['street1'];
$place =  $_POST['place1'];
$address =  $_POST['address1'];
$mobile_no =  $_POST['mobile_no1'];
$email_id =  $_POST['email_id1'];
$activation_date = $_POST['activation_date1'];
$stb_no = $_POST['stb_no1'];
$vc_model = $_POST['vc_model1'];
$connection_status1 =  $_POST['connection_status1'];


$result = mysqli_query($link, "update cableconnect set name ='$name', street='$street',place='$place',address='$address',mobile_no='$mobile_no',email_id='$email_id',activation_date='$activation_date',stb_no='$stb_no',vc_model='$vc_model',connection_status='$connection_status1' where cable_id = '$cable_id'");


if($result)
{
}
mysqli_close($link);
?>