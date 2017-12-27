
<?php
include "../config.php";
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;


$result = mysqli_query($link, "SELECT payment.cable_id,payment.installation_charges,payment.installation_due,payment.monthly_rental,payment.payment_due,cableconnect.name,cableconnect.street,cableconnect.place,cableconnect.mobile_no, cableconnect.address
FROM payment, cableconnect where payment.cable_id=cableconnect.cable_id");
$array = array();
	while ($row = mysqli_fetch_array($result)) {

        $obj=new stdClass();
$obj->cable_id=$row["cable_id"];
$obj->name=$row["name"];
//$obj->installation_charges=$row["installation_charges"];
$obj->installation_due=$row["installation_due"];
//$obj->monthly_rental=$row["monthly_rental"];
$obj->payment_due=$row["payment_due"];
        
$obj->street=$row["street"];
$obj->place=$row["place"];
$obj->mobile_no=$row["mobile_no"];
$obj->address=$row["address"];        
array_push($array,$obj);        
	}
echo json_encode($array);
mysqli_close($link);
?>
