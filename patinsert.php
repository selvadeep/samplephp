<?php
$link = mysqli_connect("localhost","root","root", "fixnix");
$patname=$_REQUEST["name"];
$patmail=$_REQUEST["email"];
$patmobile=$_REQUEST["phone"];
$hospital=$_REQUEST["hospital"];
$patdoctor=$_REQUEST["doctor33"];
$res= mysqli_query($link, "SELECT location FROM doctor where docname='$patdoctor'");
while ($row = mysqli_fetch_array($res)) 
{
$location=$row["location"];
}
$result = mysqli_query($link, "INSERT INTO `patient`(patname, patmail, `mobilenumber`,`hospital`,patdoctor,location) VALUES ('$patname','$patmail','$patmobile','$hospital','patdoctor','$location')");
if ($result)
{

	echo "success";
}
mysqli_close($link);

?>