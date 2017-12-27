<?php
include "../config.php";



$id =  $_POST['id1'];
$name =  $_POST['name1'];
$cable_id = $_POST['cable_id1'];
$email_id =  $_POST['email_id1'];
$password = $_POST['password1'];
$dob = $_POST['dob1'];
$img = $_POST['img1'];
$dept =$_POST['dept1'];

$result= mysqli_query($link, "update userdetails set name ='$name',cable_id ='$cable_id', email_id='$email_id',password='$password',dob='$dob',img='$img',dept='$dept' where id ='$id'");



mysqli_close($link);
?>