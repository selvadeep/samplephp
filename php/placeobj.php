
<?php
include "../config.php";

$result1 = mysqli_query($link, "SELECT * FROM Place");
$cable = array();

	while ($row = mysqli_fetch_array($result1)) {

        $obj=new stdClass();
      
$obj->id=$row["id"];
$obj->cable_id=$row["place"];
$obj->city=$row["city"];
$obj->state=$row["state"];        
$obj->country=$row["country"];
        
array_push($cable,$obj);
	}
echo json_encode($cable);
mysqli_close($link);
?>


