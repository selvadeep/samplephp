<?php
include "../config.php";

$cable_id = $_REQUEST['cable_id'];


$result = mysqli_query($link, "DELETE FROM cableconnect WHERE cable_id='$cable_id'");
$result = mysqli_query($link, "DELETE FROM payment WHERE cable_id='$cable_id'");
$result = mysqli_query($link, "DELETE FROM paymenthistory WHERE cable_id='$cable_id'");


if($result)
{
}
mysqli_close($link);
?>