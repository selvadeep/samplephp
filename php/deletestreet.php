<?php
include "../config.php";

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;


$cable_id = $_REQUEST['cable_id'];


$result = mysqli_query($link, "DELETE FROM Street WHERE id='$cable_id'");
/*$result = mysqli_query($link, "DELETE FROM payment WHERE cable_id='$cable_id'");
$result = mysqli_query($link, "DELETE FROM paymenthistory WHERE cable_id='$cable_id'");*/


if($result)
{
}
mysqli_close($link);
?>