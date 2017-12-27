<?php

session_start();


include_once 'config.php';


if (isset($_POST['login'])) {
    
$email = $_POST['email'];
$password = $_POST['password'];
    
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
	$result = mysqli_query($link, "SELECT * FROM user WHERE email = '" . $email. "' and phonenumber = '" . $password . "'");

    
    
        
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['email'];
       
		header("Location: new.php");
	}
    
             else
             {
                 $errormsg = "Incorrect Emailid and password!!!";
             }
	}

    
    



?>

<!doctype html>
<html>
    
    
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
    
<style>

    body{background: #eee url(http://subtlepatterns.com/patterns/sativa.png);}
html,body{
    position: relative;
    height: 100%;
      background: #FE7178;
  background: linear-gradient(to right top, #FE7178, #FF9564);
  border-radius: 6px;
}

    
.login-container{
    position: relative;
    border-radius: 10px;
    width: 400px;
    margin: 80px auto;
    padding: 20px 40px 40px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
    margin-top: 50px;
}

#output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
}

#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}


.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);

}

.avatar{
    
    padding-left: -10px;
}

.form-box input{
    width: 100%;
    padding: 10px;
    text-align: center;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
}


</style>
    
<script>
   
    </script>
    
<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"><img src="rocket1.gif" style="width:300px;height:240px;">

        
        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Rocket SMS Login</legend>
					
					<div class="form-group">
                        <p class="text-left">Email</p>
						<input type="text" name="email" placeholder="Your Email" required class="form-control" />
                        <br/>
                        <p class="text-left">Password</p>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
                        <br/>
						<input type="submit" name="login" value="Login" class="btn btn-large btn-block btn-info"  />
					</div>
				</fieldset>
		</form>
		<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        
        
        </div>    			
        
</div>
</html>