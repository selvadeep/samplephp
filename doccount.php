<?php
$link = mysqli_connect("localhost","root","root", "fixnix");



?> 
<select id="country1" name="select" class="form-control" >
			 <option value="none">-Select-</option>
			 <?php
$result = mysqli_query($link, "SELECT DISTINCT hospital from patient");
while ($row = mysqli_fetch_array($result)) 
{


?>

		   <option value="<?php echo $row['hospital'];?>"><?php echo $row['hospital'];?></option>
	


<?php  
  }
mysqli_close($link);
?>

	  </select>