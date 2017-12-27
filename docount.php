<?php
$link = mysqli_connect("localhost","root","root", "fixnix");



?> 
<select id="country78" name="select" class="form-control" >
			 <option value="none">-Select-</option>
			 <?php
$result = mysqli_query($link, "SELECT DISTINCT patdoctor from patient");
while ($row = mysqli_fetch_array($result)) 
{


?>

		   <option value="<?php echo $row['patdoctor'];?>"><?php echo $row['patdoctor'];?></option>
	


<?php  
  }
mysqli_close($link);
?>

	  </select>