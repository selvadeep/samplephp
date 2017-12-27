<?php
$link = mysqli_connect("localhost","root","root", "fixnix");
$name=$_REQUEST["username"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phonenumber"];
$location=$_REQUEST["location"];

$result = mysqli_query($link, "INSERT INTO `user`(username, email, `phonenumber`,`location`) VALUES ('$name','$email','$phone','$location')");
mysqli_close($link);
?>