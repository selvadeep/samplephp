<?php
$link = mysqli_connect("localhost","root","root", "fixnix");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$hospital=$_REQUEST["hospital"];
$location=$_REQUEST["location"];
$result = mysqli_query($link, "INSERT INTO `doctor`(docname, docemail, `docphone`,`hospital`,location) VALUES ('$name','$email','$phone','$hospital','$location')");
if ($result)
{

	echo "success";
}
mysqli_close($link);

?>