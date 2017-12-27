<?php
include "../config.php";
$place = $_POST['area'];
?> 


			 <?php
$result = mysqli_query($link, "SELECT * FROM Place where place = '$place'");
while ($row = mysqli_fetch_array($result)) 
{


?>
<input type="text" id="city" value="<?php echo $row['city'];?>" class="form-control">
<br>
<b>State</b><br><input type="text" id="state" value="<?php echo $row['state'];?>" class="form-control">

		   
	


<?php  
  }
mysqli_close($link);
?>

	  