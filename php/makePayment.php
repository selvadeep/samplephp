<?php
include "../config.php";

$cableId = $_POST['cableId'];
$amount = $_POST['amount'];
$collection_agent = $_POST['collection_agent'];

mysqli_query($link, "insert into paymenthistory (cable_id,amount,payment_date,collection_agent) values ('$cableId','$amount',NOW(),'$collection_agent')");

$result = mysqli_query($link, "update payment set payment_due = payment_due-$amount where cable_id = '$cableId'");

if($result)
{
    ?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Payment completed successfully for customer.
</div>
<?php
}
else
{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Payment not completed successfully for customer. Please check the Cable Id and try again.
</div>
<?php    
}

mysqli_close($link);
?>
