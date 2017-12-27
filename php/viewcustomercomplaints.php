
<?php
include "../config.php";


$cableId = $_GET['cableId'];

$result = mysqli_query($link, "SELECT * FROM complaints WHERE cable_id = '$cableId'");

$array = array();

while ($row = mysqli_fetch_array($result)) {

    $obj=new stdClass();
$obj->complaints=$row["complaints"];
$obj->verified=$row["verified"];
$obj->complained_date=$row["complained_date"];   
$obj->verified_date=$row["verified_date"];
    
array_push($array,$obj);        
	}
echo json_encode($array);
mysqli_close($link);
?>
