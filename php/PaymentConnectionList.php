
<?php
include "../config.php";

session_start();
$customerid=$_SESSION['cable_id'];
$customername=$_SESSION['usr_name'];

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
$result1 = mysqli_query($link, "SELECT * from cableconnect where name='$customername'");


	while ($row1 = mysqli_fetch_array($result1)) {
       
        $obj1=new stdClass();
        $obj1->name=$row1["name"];
        

$result = mysqli_query($link, "SELECT * from payment where cable_id='$customerid'");
$array = array();

	while ($row = mysqli_fetch_array($result)) {
        

        $obj=new stdClass();
$obj->cable_id=$row["cable_id"];

$obj->installation_charges=$row["installation_charges"];
$obj->installation_due=$row["installation_due"];
$obj->monthly_rental=$row["monthly_rental"];
$obj->payment_due=$row["payment_due"];
        
$obj_merged = (object) array_merge((array) $obj1, (array) $obj);
array_push($array,$obj_merged);
        
	}
    }
echo json_encode($array);
mysqli_close($link);
?>

