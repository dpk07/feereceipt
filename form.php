<?php
session_start();

require_once'classes/membership.php';
$membership =  new membership();
if($_POST && !empty($_POST['username']) && !empty($_POST['pwd'])) {
	$response = $membership->validate_user($_POST['username'],$_POST['pwd']);
$_SESSION["username"] = $_POST['username'];
$_SESSION["password"] = $_POST['pwd'];
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Fee Receipt - Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://www.eduvidya.com/admin/Upload/Institutes/635131178453507547_DMCE%20logo.jpg">
	<link rel="stylesheet" href=bootstrap.css>
	
	<link rel="stylesheet" type="text/css" href="form.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="form.js"></script>
</head>
<body>
	<div class="container-fluid box">
		<div class="col-md-4 col-md-offset-4 loginbox">
			<div class="panel-heading  loginheader">
                <div class="panel-title">Log In</div>
            </div>
            <br>
            <form method="post" action="">
            	<div class="form-group">
            	<div class="input-group">
            		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            		<input id="login-username" type="username" class="form-control" name="username" required="" placeholder="Username">
            	</div>
            	<br>
            	<div class="input-group">
            		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            		<input id="login-password" type="password" class="form-control" name="pwd" required="" placeholder="Password" pattern="([0-9]{2})\/([0-9]{2})\/([0-9]{4})">
            	</div>
            	<br>
            	<div class="input-group">
            		<div class="checkbox">
            			<label>
            				<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
            			</label>
            		</div>
            	</div>
            	<div>
            		<center>
            			<button class="btn btn-success" id="login">Login</button>
						<input type="reset" class="btn btn-primary" value="Clear">
            		</center>
            	</div>
            </form>
            <?php
            	if(isset($response)) echo "<h4 class='alert'>" .$response. "</h4>";
            ?>
            </div>
            <br>
            <div class="bottom-border"></div>
            <br>
            <span>Account section login?</span><a href="stafflogin.php" class="login">Click Here</a>
        </div>
        
            
	</div>
</body>
</html>
