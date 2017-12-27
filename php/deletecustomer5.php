<?php
include "../config.php";

$cable_id = $_GET['idd'];


$result = mysqli_query($link, "DELETE FROM department WHERE id='$cable_id'");


mysqli_close($link);
?>