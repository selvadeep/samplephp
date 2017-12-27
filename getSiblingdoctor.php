<?php
$link = mysqli_connect("localhost","root","root", "fixnix");
$name=$_REQUEST['hospital'];

?> 

<select id="doctor32" name="select" class="form-control" >
			 <option value="none">-Select the Doctor-</option>
			 <?php
$result = mysqli_query($link, "SELECT DISTINCT docname from doctor where hospital='$name'");
while ($row = mysqli_fetch_array($result)) 
{


?>

		   <option value="<?php echo $row['docname'];?>"><?php echo $row['docname'];?></option>
	


<?php  
  }
mysqli_close($link);
?>

	  </select>