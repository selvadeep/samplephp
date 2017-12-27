<?php
session_start();
$cable_id = $_SESSION['cable_id'];
$name = $_SESSION['usr_name'];
include_once 'config.php';
if($_SESSION['usr_name']!='')
{
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	
	<title>Responsive Table</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" href="css1/style.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
    
        
	@media 
	 (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			
			position: absolute;
			
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
		
		td:nth-of-type(1):before { content: "Name"; }
		td:nth-of-type(2):before { content: "Cable Id"; }
		td:nth-of-type(3):before { content: "Street"; }
		td:nth-of-type(4):before { content: "Area"; }
		td:nth-of-type(5):before { content: "Address"; }
		td:nth-of-type(6):before { content: "Mobile No"; }
		td:nth-of-type(7):before { content: "Email Id"; }
		td:nth-of-type(8):before { content: "Activation Date"; }
		td:nth-of-type(9):before { content: "STB No"; }
		td:nth-of-type(10):before { content: "VC Model"; }
        td:nth-of-type(11):before { content: "Connection Status"; }
	}
	
	
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 320px; }
		}
	
	
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}
	 
	</style>

</head>

<body>
<header class="site-header">
	    <div class="container-fluid">
     <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="logo.png" alt="">
         
          <br><br><br>
	        </a>
    </div>
    </header>
       
   <a  href="logout.php" style="margin-left: 67px;">Logout</a>
	           <br><br>

	<table>
		<thead>
		<tr>        
            <th>Name</th>
            <th>Cable Id</th>
            <th>Street</th>
            <th>Area</th>
            <th>Address</th>
            <th>Mobile No</th>
            <th>Email Id</th>
            <th>Activation Date</th>
            <th>STB No</th>
            <th>VC Model</th>
            <th>Connection Status</th>
		</tr>
		</thead>
		<tbody>
 <?php
include "config.php";
$res = $link->query("select * from cableconnect");
while ($row = $res->fetch_assoc()) {
?>
    
	  <tr>
	    <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['cable_id']; ?></td>
		  <td><?php echo $row['street']; ?></td>
          <td><?php echo $row['place']; ?></td>
          <td><?php echo $row['address']; ?></td>
		  <td><?php echo $row['mobile_no']; ?></td>
          <td><?php echo $row['email_id']; ?></td>
          <td><?php echo $row['activation_date']; ?></td>
		  <td><?php echo $row['stb_no']; ?></td>
          <td><?php echo $row['vc_model']; ?></td>
          <td><?php echo $row['connection_status']; ?></td>
         
            </tr> 
            <?php
            }
            ?>
      
		</tbody>
	</table>
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Online Payments</h4>
      </div>
      <div class="modal-body">
        
<form id="form1">
 
<blockquote class="blockquote">
  <p class="m-b-0">This section will provide the details of all payments done online through RocketSMS. Currently this section is not active as the online payment is not available currently in RocketSMS.</p>
</blockquote>    

</form>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div> 
     <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Complaints</h4>
         </div>
      <div class="modal-body">
        
<form id="form1">

<blockquote class="blockquote">
  <p class="m-b-0">You can add complaints related to connections....</p>
</blockquote>    
<div class="form-group">
     <label for="complaints">Type</label>
     <input type="text" placeholder=" Enter The Type Of Complaint " class="form-control" id="type">
    <br>
    <label for="complaints">Complaint Assign To</label>
    <input type="text" placeholder="Enter Your Cable Operator Name" class="form-control" id="assigncomplaints">
    <br>
    <label for="complaints">Brief Details About Complaint </label>
    <input type="text" placeholder="Enter Your Problem Briefly" class="form-control" id="addcomplaints">
   
  </div>
</form>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  onclick="addcomplaints()" data-dismiss="modal">Send</button>
      </div>
    </div>
  </div>
</div>  
	
</body> 

</html>

<?php
}
else
{
   header("Location: login.php");
}
?>