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

    
	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">
 
    

    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/custom.css">
        
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
<body class="with-side-menu-compact">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="img/logo.png" alt="">
	           
	        </a>
	       
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    
	
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span> <?php echo $_SESSION['usr_name']; ?> </a>
	                            <a class="dropdown-item" href="settings.php"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
	                            <a class="dropdown-item" href="support.php"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div>
	
	                <div class="mobile-menu-right-overlay"></div>
	               
	            </div>
	        </div>
	    </div>
	</header>

	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu side-menu-compact">
	    <ul class="side-menu-list">
           
            
            <li class="black">
	            <a href="new.php">
	                <i class="fa fa-building"></i>
	                <span class="lbl">User</span>
	            </a>
	        </li>
			 <li class="black opened">
	            <a href="location.php">
	                <i class="fa fa-map-marker active"></i>
	                <span class="lbl">Location</span>
	            </a>
	       <li class="black ">
              <a href="doctor.php">
                  <i class="fa fa-user-md" aria-hidden="true"></i>
                  <span class="lbl">Doctor</span>
              </a>
          </li>  
            
            </li>
             <li class="black ">
              <a href="patient.php">
                  <i class="fa fa-h-square" aria-hidden="true"></i>
                  <span class="lbl">Patient</span>
              </a>
          </li>
          <li>
             <li class="black ">
              <a href="report.php">
                  <i class="fa fa-flag" aria-hidden="true"></i>
                  <span class="lbl">Report</span>
              </a>
          </li>
              </a>
          </li>   
    
            
	  
	    </ul>
	</nav>
 
    
	<body class="dataTables">
		<div id="viewdata" class="container">

			            <h4><u>Location list</u></h4>
             <br/>
            <div class="row">
    <div class="col-xs-2">
        <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#myModal1"><i class="fa fa-user"></i> New</button>
    </div>
    <div class="col-xs-2">
        <button class="btn btn-success btn-block" onclick="getIndex2()"><i class="fa fa-file"></i>  Edit</button>
    </div>
    <div class="col-xs-2">
        <button class="btn btn-info btn-block" onclick="getIndex1()"><i class="fa fa-trash"></i>  Delete</button>
    </div>
   
                </div>
            <br/>
             <br/> 
			<table id="cableconnect" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
				    <tr>
						<th>id</th>
						<th>area</th>
						<th>country</th>
            <th>city</th>
						<th>state</th>
					</tr>
				</thead>
			</table>

		</div>
        
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Location</h4>
      </div>
      <div class="modal-body">
        
<form id="form1">
   
    <input type="hidden"  class="form-control" id="id">

    <input type="hidden" class="form-control" id="cableId2">
     <div class="form-group">
    <label for="Area">Area</label><input type="text" class="form-control" id="area2">
  </div> 

    <div class="form-group">
    <label for="country">Country</label>

         <select id="country2" onchange="countrychange()" name="select" class="form-control"  >
           <option value="none">-Select-</option>

       <?php  
       $link = mysqli_connect("localhost","root","root", "fixnix");
$res = mysqli_query($link, "SELECT  DISTINCT country FROM country");
while ($row = mysqli_fetch_array($res)) 
{

?>

 <option value="<?php echo $row['country'];?>" > <?php echo $row['country']; ?> </option>

<?php  
  }
mysqli_close($link);
?>

        </select>
  </div>
    <div class="form-group">
    <label for="state">State</label>

          <select id="state2"  onchange="citychange()" class="form-control"  >
           <option value="none">-Select-</option>

        </select>
  </div> 
 <div class="form-group">
    <label for="city">City</label>

      <select id="cities2"  class="form-control"  >
           <option value="none">-Select-</option>

        </select>
  </div>   

</form>

          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="save" onclick="updateLocation()" data-dismiss="modal" class="btn btn-primary">Update Now</button>
      </div>
    </div>
  </div>
</div>     
        
        
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Location</h4>
      </div>
      <div class="modal-body">
        
<form id="form1">
   <div class="form-group">
    <label for="Area">Area</label>
    <input type="text" class="form-control" id="area">
  </div>
  <div class="form-group">
    <label for="country">Country</label><div id="country" onchange="country1()" ></div>
  </div>
  <div class="form-group">
    <label for="state">State</label><div id="state" onchange = "city()" ></div>
  </div> 
<div class="form-group">
    <label for="city">City</label><div id="cities" ></div>
   
  </div>
</form>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="save" onclick="saveLocation()" data-dismiss="modal" class="btn btn-primary">Create Now</button>
      </div>
    </div>
  </div>
</div> 
        
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Location</h4>
      </div>
      <div class="modal-body">
          <h4> Do you want to delete this record</h4>
          <input type="hidden" class="form-control" id="id2">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" id="save" onclick="deletecustomer()" data-dismiss="modal" class="btn btn-primary">Yes</button>
      </div>
      </div>
    </div>
        </div>
                 <script>

 
 $(document).ready( function() {
    
       $.ajax({
     type: "GET",
     url: "count.php"
      }).done(function( data ) {
    $('#country').html(data);
      });
} );

        
        function countrychange(){
        debugger;
  
     var e = document.getElementById("country");
        var name123 = e.options[e.selectedIndex].text;
         $.ajax({
          dataType: "json",
          url: "getSiblingsStates.php",
          data: "&country="+name123,
          success: function(data){     
              $('#state2').html("");
              $.each(data, function(i, value) {
                
                    
                    $('#state2').append($('<option>').text(data[i].name).attr('value', data[i].name));
                });
            }
} );   
        
 }

 function citychange(){
        debugger;
  
     var e = document.getElementById("state2");
        var cityname = e.options[e.selectedIndex].text;

   
                      $.ajax({
  dataType: "json",
  url: "getSiblingCities.php",
  data: "&state="+cityname,
  success: function(data){     
      $('#cities2').html("");
      $.each(data, function(i, value) {
          
            $('#cities2').append($('<option>').text(data[i].name).attr('value', data[i].name));
        });
    }
} );     

  }




    function saveLocation()
{
    debugger;

         
            var area = $('#area').val();
            var city = $('#cities1').val();
            var state = $('#state1').val();
           var country = $('#country1').val();
           
           
    
       var datas={'area': area,'city': city, 'state': state ,'country': country}
      
$.ajax({
	   type: "POST",
	   url: "gkinsert.php",
	   data: datas
	}).done(function( data ) {
     location.reload();
      
	});
    }
 function country1(){
         debugger;
           var country = $('#country1').val();
  

    
      $.ajax({
      type: "POST",
      url: "country.php",
            
      data: "&country="+country,
      success: function(data){
      $('#state').html(data);
    }
  });
  }     
function city(){
        debugger;
  
     var e = document.getElementById("state1");
        var state = e.options[e.selectedIndex].text;
    
      $.ajax({
      type: "POST",
      url: "area.php",
      data: "&state="+state,
      success: function(data){
      $('#cities').html(data);
    }
  });
  }            
                     
                     
   function updateLocation()
{
debugger;
   var id = $('#id').val();
    var area = $('#area2').val();
    var country = $('#country2').val();
    var state = $('#state2').val();
    var cities = $('#cities2').val();
    
       var datas={'area': area ,'country': country, 'state': state ,'cities': cities,'id1':id}





   var city = $('#city').val();
    
   
      var datas1={'id1': id,'area': area, 'city1': city}
      
$.ajax({
	   type: "POST",   
	   url: "gkupdate.php",
	   data: datas
	}).done(function( data ) {
    location.reload();
      
	});
}
    
function deletecustomer()
 {
 debugger;
                    
     var id2= $('#id2').val();                 
   	$.ajax({
	   type: "POST",
	   url: "gkdelete.php?id2="+id2
	}).done(function( data ) {
         location.reload();

	});
 }
                
                     
    function openstreet(){
    debugger;

        var e = document.getElementById("place1");
        var place = e.options[e.selectedIndex].text;

        $.ajax({
        type: "POST",
        url: "php/showstreet.php",
        data: "&place="+place,
        success: function(data){
        $('#showstreet').html(data);
    }
    });
    }
                     
$(document).ready( function() {

$.ajax({
  dataType: "json",
  url: "gkselect.php",
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
        }
    } );

 }
 
                     
   function getIndex2()
{
    debugger;
    var test = table.rows('.selected').data();
            $('#myModal').modal('show');
            $('#id').val(test[0][0]);
            $('#area2').val(test[0][1]);
            $('#country2').val(test[0][2]);
            $('#cities2').val(test[0][3]); 
            $('#state2').val(test[0][4]);    

$("#area2").attr("value", test[0][1]);  
/*var optionValue  = $("#cableId2").val();*/ 
 


    
$.ajax({
  dataType: "json",
  url: "getSiblingsStates.php",
  data: "&country="+test[0][2],
  success: function(data){            
      $.each(data, function(i, value) {
           
            $('#state2').append($('<option>').text(data[i].state).attr('value', data[i].state));
            $('#state2').val(test[0][4]);
        });
    }    
} );   
    
$.ajax({
  dataType: "json",
  url: "getSiblingCities.php",
  data: "&state="+test[0][4],
  success: function(data){            
      $.each(data, function(i, value) {
           
            $('#cities2').append($('<option>').text(data[i].name).attr('value', data[i].name));
            $('#cities2').val(test[0][3]);
        });
    }
} );       
    
}                      

function showstreet3(){
       debugger;
    
         var e = document.getElementById("place5");
       var name5 = e.options[e.selectedIndex].text;
      
      $.ajax({
 dataType: "json",
 url: "php/connectioneditstreet.php",
 data: "&areaName="+name5,
 success: function(data){            
         $('#street_edit').html("");
	    $.each(data, function(i, value) {
      
        $('#street_edit').append($('<option>').text(data[i].name).attr('value', data[i].name)); 

        });
		}
} ); 
    }
                     
                     
                     
 function getIndex1()
{
    debugger;
            var test = table.rows('.selected').data();
            $('#myModal2').modal('show');
            $('#id2').val(test[0][0]);
                     
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
     } tableInit();
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