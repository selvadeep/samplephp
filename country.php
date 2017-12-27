<?php
$link = mysqli_connect("localhost","root","root", "fixnix");

$country=$_POST['country'];

?> 
<select id="state1" name="select" class="form-control" >
			 <option value="none">-Select-</option>
			 <?php
$result = mysqli_query($link, "SELECT DISTINCT state FROM country WHERE country ='$country'");
while ($row = mysqli_fetch_array($result)) 
{


?>

		   <option value="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>
	


<?php  
  }
mysqli_close($link);
?>

	  </select>