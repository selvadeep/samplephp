
<?php
include "../config.php";
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;


$result = mysqli_query($link, "SELECT cable_id from cableconnect");
$array = array();
	while ($row = mysqli_fetch_array($result)) {

echo $row["cable_id"];

	}

mysqli_close($link);
?>
