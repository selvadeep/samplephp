
<?php
include "../config.php";
//echo "1";
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$amount = $_POST['amount'];
//echo $amount;

$result = mysqli_query($link, "SELECT cable_id from cableconnect");

	while($row = mysqli_fetch_array($result)) {
        $cable_id = $row["cable_id"];  

        mysqli_query($link, "INSERT INTO bill (cable_id,amount,month,year,status) VALUES ('$cable_id',$amount,6,2016,'Pending')");
	}

/*MONTH(NOW())*/
                       
$result = mysqli_query($link, "update payment set payment_due = payment_due+$amount");

//echo $mysqli->affected_rows;

if($result)
{
    ?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Bill generated successfully for all customers.
</div>
<?php
}
else
{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Bill generation was not successfully completed. Please try again.
</div>
<?php    
}

mysqli_close($link);
?>
