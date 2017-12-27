<?php
include "../config.php";

$complaints = $_REQUEST['complaints'];
$cableid_verify = $_REQUEST['cableid_verify'];
$verified_date = date("d/m/Y");

$result = mysqli_query($link, "update complaints set  verified = 'YES', verified_date = '$verified_date' where complaints = '$complaints' AND cable_id = '$cableid_verify' ");

if($result)
{
}
mysqli_close($link);
?>