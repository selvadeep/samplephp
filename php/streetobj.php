<?php
include "../config.php";
$result1 = mysqli_query($link, "SELECT Street.id,Street.streetname,Street.place,Street.city,Street.state FROM Street");
$cable = array();

	while ($row = mysqli_fetch_array($result1)) {

        $obj=new stdClass();
$obj->id=$row["id"];        
$obj->cable_id=$row["streetname"];
$obj->place=$row["place"];
$obj->street=$row["city"];        
$obj->address=$row["state"];  
        
array_push($cable,$obj);
	}
echo json_encode($cable);
mysqli_close($link);
?>


