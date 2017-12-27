
<?php
include "../config.php";



$cableId = $_POST['cableid'];


			 
$result = mysqli_query($link, "SELECT * from cableconnect WHERE cable_id ='$cableId' OR mobile_no ='$cableId'");
while ($row = mysqli_fetch_array($result)) 

{
?>
<br>
    <p>Name:   <?php echo $row['name']; ?></p>
    <p>Address:   <?php echo $row['address']; ?></p>
    <p>Street:   <?php echo $row['street']; ?></p>
    <p>Place:   <?php echo $row['place']; ?></p>
    <p>Mobile_no:   <?php echo $row['mobile_no']; ?></p>
    <p>Connection Status:   <?php echo $row['connection_status']; ?></p>
<?php
 
  }

mysqli_close($link);
?>

	 