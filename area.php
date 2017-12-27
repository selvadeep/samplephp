<?php
$link = mysqli_connect("localhost","root","root", "fixnix");
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
$state=$_POST['state'];
?> 

<select id="cities1" name="select" class="form-control" >
			 <option value="none">-Select-</option>
			 <?php
$result = mysqli_query($link, "SELECT DISTINCT city FROM country WHERE state ='$state'");
while ($row = mysqli_fetch_array($result)) 
{


?>

		   <option value="<?php echo $row['city'];?>"><?php echo $row['city'];?></option>
	


<?php  
  }
mysqli_close($link);
?>

	  </select>