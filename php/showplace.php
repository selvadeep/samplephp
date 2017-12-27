<?php
include "../config.php";
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

?> 
<select id="place1" name="select" class="form-control" >
			 <option value="none">-Select-</option>
			 <?php
$result = mysqli_query($link, "SELECT DISTINCT place FROM Place");
while ($row = mysqli_fetch_array($result)) 
{


?>

		   <option value="<?php echo $row['place'];?>"><?php echo $row['place'];?></option>
	


<?php  
  }
mysqli_close($link);
?>

	  </select>