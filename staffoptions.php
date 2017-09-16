<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Fee Receipt-StaffOptions</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://www.eduvidya.com/admin/Upload/Institutes/635131178453507547_DMCE%20logo.jpg">
	<link rel="stylesheet" href=bootstrap.css>
	<link rel="stylesheet" type="text/css" href="options.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
	<div style="background-color:#3361C9;">
		<div style="background-color:#3361C9;color:white;">
			<br>
			<center><h1 style="margin-top:0px;">Datta Meghe College of Engineering</h1></center>
		</div>
		<nav class="navbar ">
			<div class="container-fluid">


				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li><a style="color:black;" href="stafflogin.php">Login</a></li>
						<li><a style="color:black;" href="staffoptions.php">Options</a></li>
						<li><a style="color:black;" href="add_student.php">Add Student</a></li>
						<li><a style="color:black;" href="remove_student.php">Remove Student</a></li>
						<li><a style="color:black;" href="fee_structure_form.php">Update fee structure</a></li>
						<li><a style="color:black;" href="validatedd.php">Validate DD</a></li>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a style="color:black;" href="logout.php">Logout</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div></div>
		<div class="col-md-3"></div></div>

		<div class="container-fluid box col-md-6">
			<div class="loginbox">
				<h2>Staff options</h2>
				<br>
				<button onclick="location.href='add_student.php'">Add Student</button>
				<button onclick="location.href='remove_student.php'">Remove Student</button>
				<button onclick="location.href='fee_structure_form.php'">Update Fee Structure</button>
				<button onclick="location.href='validatedd.php'">Validate DD</button>
				
								
							</div>
							<br>

							<div class="bottom-border"></div>
							<br>
						</div>

					</div>
				</div>


									

			</body>