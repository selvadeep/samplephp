<?php
session_start();
$cable_id = $_SESSION['cable_id'];
$name = $_SESSION['usr_name'];
include_once '../config.php';
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
            .btn_history{
            margin-left: 59px;
        }
        
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
		td:nth-of-type(3):before { content: "installation_charges"; }
		td:nth-of-type(4):before { content: "installation_due"; }
		td:nth-of-type(5):before { content: "monthly_rental"; }
		td:nth-of-type(6):before { content: "payment_due"; }
	    
     
	}
	
	
	@media only screen
	   and (max-width : 400px) {
		table { 
			width: 300px !important;
        }
		}
	
	
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}

    	@media only screen and (max-width: 370px) {
		table { 
			  margin-left: 40px;
		}
            .btn_history { 
			  margin-left: 40px;
		}
	}
	</style>
	

</head>

<body>
<header class="site-header">
	    <div class="container-fluid">
     <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="logo.png" alt="">
         
         
	           <br><br>
	        </a>
    </div>
    </header>
  
        <div>
        <button class="btn1 btn-info btn_history" data-toggle="modal" data-target="#myModal2" style=""> Payment History</button>
  
          <button class="btn2 btn-primary"  data-toggle="modal" data-target="#myModal3"> Online Payments </button>
    
        <button class="btn3 btn-danger" data-toggle="modal" data-target="#myModal4">  Add Complaints</button>
        
       <br><br><br>
    </div>
  

	<table id="view_content">
		<thead>
		<tr>        
            <th>Name</th>
            <th>Cable Id</th>
            <th>installation_charges</th>
            <th>installation_due</th>
            <th>monthly_rental</th>
            <th>payment_due</th>
            
		</tr>
		</thead>
		<tbody>
            <?php
include "../config.php";
$res = $link->query("select * from payment where cable_id = '$cable_id'");
while ($row = $res->fetch_assoc()) {
?>
    
	  <tr>
	    <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['cable_id']; ?></td>
		  <td><?php echo $row['installation_charges']; ?></td>
          <td><?php echo $row['installation_due']; ?></td>
          <td><?php echo $row['monthly_rental']; ?></td>
		  <td><?php echo $row['payment_due']; ?></td>
         
            </tr> 
            <?php
            }
            ?>
      
		</tbody>
	</table>
    <br><br>
      
   
    
    <button class="btn1 btn-danger btn_history" onclick="logout()"> LOGOUT</button>
    
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
  <p class="m-b-0">This section will provide the details of all payments done online through the RocketSMS app. Currently this section is not active as the online payment is not available currently in RocketSMS.</p>
</blockquote>    

</form>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div> 
    
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Payment History</h4>
      </div>
      <div class="modal-body">
        
<form id="form1">
  NAME  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CABLE_ID&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; AMOUNT&nbsp;&nbsp; &nbsp;&nbsp;DATE
    <br>
<?php
   include "../config.php"; 
$result = mysqli_query($link, "SELECT paymenthistory.cable_id,paymenthistory.amount,paymenthistory.payment_date,paymenthistory.collection_agent,cableconnect.name
FROM paymenthistory, cableconnect
WHERE paymenthistory.cable_id = cableconnect.cable_id and paymenthistory.cable_id ='$cable_id'");


	while ($row = mysqli_fetch_array($result)) { 
        
        ?>
    
	    <?php echo $row['name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <?php echo $row['cable_id']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <?php echo $row['amount']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php echo $row['payment_date']; ?>
         
         <br>
           
         <?php
            }
?>
    
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
     <input type="text" placeholder=" Enter The Type Of Complaint " class="form-control" id="type1">
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
	
    <script>
         function addcomplaints(){
	
      debugger;
    var type1 = $('#type1').val();
    var assigncomplaints = $('#assigncomplaints').val();
    var addcomplaints = $('#addcomplaints').val(); 
    var cableid = "<?php echo $cable_id;  ?>";
    var name = "<?php echo $name;  ?>";
                    
	var datas={'type1': type1 ,'assigncomplaints': assigncomplaints ,'addcomplaints': addcomplaints ,'cableid': cableid ,'name': name }
      
	$.ajax({
	   type: "POST",
	   url: "addcomplaints.php",
	   data: datas
	}).done(function( data ) {
     location.reload();
      
	});
    }  
    function logout()
        
        { debugger;
            location.href="../logout.php";
        }
    
    
    </script>
    
    
</body> 

</html>

<?php
}
else
{
   header("Location: ../login.php");
}
?>