<?php
include "../config.php";

$cable_id = $_GET['cable_idd'];


$result = mysqli_query($link, "DELETE FROM userdetails WHERE cable_id='$cable_id'");

if($result)
{
}
mysqli_close($link);
?>



