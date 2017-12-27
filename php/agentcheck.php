<?php
include "../config.php";

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$cableId = $_POST['cableId'];


			 
$result = mysqli_query($link, "SELECT * from cableconnect WHERE cable_id ='$cableId'");
while ($row = mysqli_fetch_array($result)) 

{
?>
<br>
    <p>Name:   <?php echo $row['name']; ?></p>
    <p>Address:   <?php echo $row['address']; ?></p>
    <p>Street:   <?php echo $row['street']; ?></p>
    <p>Place:   <?php echo $row['place']; ?></p>
    <p>Mobile_no:   <?php echo $row['mobile_no']; ?></p>
<?php
 
  }

mysqli_close($link);
?>

	 