<?php
$link = mysqli_connect("localhost","root","root", "fixnix");



?> 
<select id="country1" name="select" class="form-control" >
			 <option value="none">-Select-</option>
			 <?php
$result = mysqli_query($link, "SELECT DISTINCT country from country");
while ($row = mysqli_fetch_array($result)) 
{


?>

		   <option value="<?php echo $row['country'];?>"><?php echo $row['country'];?></option>
	


<?php  
  }
mysqli_close($link);
?>

	  </select>