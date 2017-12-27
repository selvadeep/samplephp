<?php
$link = mysqli_connect("localhost","root","root", "fixnix");
$id=$_REQUEST["id1"];
$name=$_REQUEST["name1"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["mobnumber"];
$hospital=$_REQUEST["hospital"];
$location=$_REQUEST["location"];


$result = mysqli_query($link, "UPDATE `doctor` SET `docname`='$name',`docemail`='$email',`docphone`='$phone',hospital='$hospital',location='$location' WHERE id='$id'");
mysqli_close($link);
?>