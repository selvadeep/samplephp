
<?php
include "../config.php";
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$cableId = $_GET['cableId'];

$result1 = mysqli_query($link, "SELECT sum(amount) as total FROM paymenthistory WHERE MONTH(payment_date) = MONTH(NOW()) AND YEAR(payment_date) = YEAR(NOW())");

$result2 = mysqli_query($link, "SELECT count(*) as connections FROM cableconnect");

$array = array();
$obj=new stdClass();

$row = mysqli_fetch_array($result1);
$obj->total=$row["total"];
$row = mysqli_fetch_array($result2);
$obj->connections=$row["connections"];

$totalCollection  = bcmul($obj->connections, '100');
$pendingCollection  = bcsub($totalCollection, $obj->total);
$obj->pending=$pendingCollection;

array_push($array,$obj); 
echo json_encode($array);
mysqli_close($link);
?>
