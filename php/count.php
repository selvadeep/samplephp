<?php
include "../config.php";



?> 
<select id="country1" name="select" class="form-control" >
			 <option value="none">-Select-</option>
			 <?php
$result = mysqli_query($link, "SELECT name from countries");
while ($row = mysqli_fetch_array($result)) 
{


?>

		   <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
	


<?php  
  }
mysqli_close($link);
?>

	  </select>