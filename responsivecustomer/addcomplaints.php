<?php
include "../config.php";

$type = $_POST['type1'];
$assigncomplaints = $_POST['assigncomplaints'];
$addcomplaints = $_POST['addcomplaints'];
$cableid =  $_POST['cableid'];
$name =  $_POST['name'];
$date = date("d/m/Y");

$result = mysqli_query($link, "insert into complaints (cable_id,name,complaints,verified,type,assign_to,complained_date) values ('$cableid','$name','$addcomplaints','NO','$type','$assigncomplaints','$date')");


mysqli_close($link);
?>


