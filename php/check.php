<?php
include "../config.php";

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$name =  $_POST['name'];
$cable_id = $_POST['cable_id'];
$street =  $_POST['street'];
$place =  $_POST['place'];
$address =  $_POST['address'];
$mobile_no =  $_POST['mobile_no'];
$email_id =  $_POST['email_id'];
$activation_date = $_POST['activation_date'];
$stb_no = $_POST['stb_no'];
$vc_model = $_POST['vc_model'];
$connection_status1 =  $_POST['connection_status'];
/*
$cableId ="asfd";
$amount = "dagfds";
*/

mysqli_query($link, "insert into cableconnect (name,cable_id,street,place,address,mobile_no,email_id,activation_date,stb_no,vc_model,connection_status) values ('$name','$cable_id','$street','$place','$address','$mobile_no','$email_id','$activation_date','$stb_no','$vc_model','$connection_status1')");

mysqli_query($link, "insert into payment (cable_id,installation_charges,installation_due,monthly_rental,payment_due)  values ('$cable_id',1000,0,100,1000)");

/*$result = mysqli_query($link, "update payment set payment_due = payment_due-$amount where cable_id = '$cableId'");*/


if($result)
{
}
mysqli_close($link);
?>