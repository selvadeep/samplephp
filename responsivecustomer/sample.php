<?php
session_start();
include_once 'config.php';
if($_SESSION['usr_name']!='')
{
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Rocket SMS</title>  
     
    
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>

    
        
    <style>
#viewdata {

    margin-left: 150px;
    margin-top: 100px;
    margin-right: -20px;
    margin-bottom: 55px;
}
       table, th, td {
    border: 1px solid black;
} 
        td {
    height: 50px;
    vertical-align : middle;
}
        i.fa-vibe  {
   content:"";
   background-image:url('complaints.png');

   width: 50px; 
   height: 50px; 
   display: inline-block;
   background-position:center;
   background-size:cover;
}
</style>
</head>
<!--<body class="with-side-menu-compact">-->
	<body class="dataTables">
		<div id="viewdata" class="container">

			            <h4><u> List</u></h4>
             <br/>
                
			<table id="cableconnect" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
			</table>

		</div>
        
                <script>
                     
              
$(document).ready( function() {

    debugger;
    
    
        
    setTimeout(tableInit, 2000);
    
$.ajax({
  dataType: "json",
  url: "php/connectionList.php",
  data: "",
  success: success
});     
} );

   var table;
                     
function tableInit()
 {
    
  table = $('#cableconnect').DataTable({
     
        select: {
            style: 'single'
        },
      responsive: true
    } );

 }
                
 function success(data)
    {

        buildHtmlTable(data);
    }

 function buildHtmlTable(data) {
    
     var columns = addAllColumnHeaders(data);
 
     for (var i = 0 ; i < data.length ; i++) {
         var row$ = $('<tr/>');
         for (var colIndex = 0 ; colIndex < columns.length ; colIndex++) {
             var cellValue = data[i][columns[colIndex]];
 
             if (cellValue == null) { cellValue = ""; }
 
             row$.append($('<td/>').html(cellValue));
         }
         $("#cableconnect").append(row$);
     }
 }
 

 function addAllColumnHeaders(data)
 {
     var columnSet = [];
     var headerTr$ = $('<tr/>');
 
     for (var i = 0 ; i < data.length ; i++) {
         var rowHash = data[i];
         for (var key in rowHash) {
             if ($.inArray(key, columnSet) == -1){
                 columnSet.push(key);
                 headerTr$.append($('<th/>').html(key));
             }
         }
     }
    
 
     return columnSet;
 }
    </script>

        
	</body>
</html>
    <?php
}
else
{
   header("Location: login.php");
}
?>