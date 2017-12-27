<?php
include "../config.php";

$complaints = $_POST['complaints'];
$cableid_del = $_POST['cableid_del'];

$result = mysqli_query($link, "DELETE FROM complaints WHERE complaints='$complaints' AND cable_id='$cableid_del'");

if($result)
{
}
mysqli_close($link);
?>