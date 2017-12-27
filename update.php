<?php
$link = mysqli_connect("localhost","root","root", "fixnix");
$id=$_REQUEST["id1"];
$name=$_REQUEST["name1"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["mobnumber"];
$location=$_REQUEST["location"];


$result = mysqli_query($link, "UPDATE `user` SET `username`='$name',`email`='$email',`phonenumber`='$phone',location='$location' WHERE id='$id'");
mysqli_close($link);
?>