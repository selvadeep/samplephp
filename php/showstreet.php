<?php
include "../config.php";

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$place=$_POST['place'];

?> 
<select id="street1" name="select" class="form-control" >
			 <option value="none">-Select-</option>
			 <?php
$result = mysqli_query($link, "SELECT streetname from Street WHERE place ='$place'");
while ($row = mysqli_fetch_array($result)) 
{


?>

		   <option value="<?php echo $row['streetname'];?>"><?php echo $row['streetname'];?></option>
	


<?php  
  }
mysqli_close($link);
?>

	  </select>