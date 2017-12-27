<?php
include "../config.php";

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}



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


mysqli_query($link, "insert into cableconnect (name,cable_id,street,place,address,mobile_no,email_id,activation_date,stb_no,vc_model,connection_status) values ('$name','$cable_id','$street','$place','$address','$mobile_no','$email_id','$activation_date','$stb_no','$vc_model','$connection_status1')");

mysqli_query($link, "insert into payment (cable_id,name,installation_charges,installation_due,monthly_rental,payment_due)  values ('$cable_id','$name',1000,0,100,1000)");

$random = rand(11111, 55555);
$password = $random;

mysqli_query($link, "insert into userdetails (name, cable_id, email_id, password)  values ('$name','$cable_id','$email_id','$password')");

$to = $email_id;
$subject = "Cable Connection";
$txt = "Your password for RocketSMS user login is '$password''";
$headers = "From: jeeva@macappstudio.com";


mail($to,$subject,$txt,$headers); 


mysqli_close($link);
?>