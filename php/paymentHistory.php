
<?php
include "../config.php";


$cableId = $_GET['cableId'];

$result = mysqli_query($link, "SELECT paymenthistory.cable_id,paymenthistory.amount,paymenthistory.payment_date,paymenthistory.collection_agent,cableconnect.name
FROM paymenthistory, cableconnect
WHERE paymenthistory.cable_id = cableconnect.cable_id and paymenthistory.cable_id ='$cableId'");

$array = array();
	while ($row = mysqli_fetch_array($result)) {

        $obj=new stdClass();
$obj->cable_id=$row["cable_id"];
$obj->name=$row["name"];
$obj->amount=$row["amount"];
$obj->payment_date=$row["payment_date"];
$obj->collection_agent=$row["collection_agent"];

array_push($array,$obj);        
	}
echo json_encode($array);
mysqli_close($link);
?>
