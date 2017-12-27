<?php
$link = mysqli_connect("localhost","root","root", "fixnix");
$id=$_REQUEST["id2"];
$result=mysqli_query($link,"DELETE FROM `user` WHERE id='$id'");
mysqli_close($link);
?>