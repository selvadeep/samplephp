<?php
$link = mysqli_connect("localhost","root","root", "fixnix");
$id=$_REQUEST["id1"];
$name=$_REQUEST["name1"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["mobnumber"];
$patdoctor=$_REQUEST["patdoctor"];
$hospital=$_REQUEST["hospital"];
$res = mysqli_query($link,"SELECT location from doctor where hospital='$hospital'");
while ($row = mysqli_fetch_array($res)) 
{
$location=$row["location"];
}
$result = mysqli_query($link, "UPDATE `patient` SET `patname`='$name',`patmail`='$email',`mobilenumber`='$phone',patdoctor='$patdoctor',hospital='$hospital',location='$location' WHERE id='$id'");
mysqli_close($link);
?>