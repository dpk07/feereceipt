<?php
session_start();
if($_POST)
{
$_SESSION["current_year"] = $_POST['current_year'];
$_SESSION["category"] = $_POST['category'];
header("location: fee_receipt.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fee Receipt-Options</title>
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
						<li><a style="color:black;" href="form.php">Login</a></li>
						<li><a style="color:black;" href="options.php">Admission</a></li>
						<li><a style="color:black;" href="fee_receipt.php">Pay Fees</a></li>

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
				<h2>Fee Payment</h2>
				<br>
				<form action="" method="POST">
					<div class="form-group">
						<div class="input-group">
							<label for="stud_id" class=" input-group-addon control-label">Student ID:</label>
							<input id="stud_id" type="text" class="form-control" name="stud_id" required placeholder="Student ID" value=
							<?php
							require_once 'includes/constants.php';
							$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
							
							$sql = "SELECT `student_id` FROM `users` WHERE `username` ='{$_SESSION['username']}'";
							$result = mysqli_query($conn, $sql);
							if ($row=mysqli_fetch_assoc($result)) {
								echo "{$row['student_id']}";}?>>
							</div>
							<br>
							<div class="form-group">
								<div class="input-group">
									<label for="stud_id" class=" input-group-addon control-label">Student Name:</label>
									<input id="stud_name" type="text" class="form-control" name="stud_name" required placeholder="Student Name" 
									value='<?php
									require_once 'includes/constants.php';
									$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
									
									$sql = "SELECT `student_name` FROM `users` WHERE `username`='{$_SESSION['username']}'";
									$result = mysqli_query($conn, $sql);
									while ($row=mysqli_fetch_assoc($result)) 
										{echo "{$row['student_name']}";}?>'>
								</div>
								<br>
								<div class="form-group">
								<div class="input-group">
									<label for="category" class=" input-group-addon control-label">Category:</label>
									<input id="category" type="text" class="form-control" name="category" required placeholder="Category" 
									value='<?php
									require_once 'includes/constants.php';
									$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
									
									$sql = "SELECT `category` FROM `users` WHERE `username`='{$_SESSION['username']}'";
									$result = mysqli_query($conn, $sql);
									while ($row=mysqli_fetch_assoc($result)) 
										{echo "{$row['category']}";}?>'>
								</div>
								<br>
								<div class="form-group">
						<div class="input-group">
							<label for="admission_year" class=" input-group-addon control-label">Year of admission:</label>
							<input id="admission_year" type="char" class="form-control" name="admission_year" required placeholder="Year of admission:" value='<?php
									require_once 'includes/constants.php';
									$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
									
									$sql = "SELECT `admission_year` FROM `users` WHERE `username`='{$_SESSION['username']}'";
									$result = mysqli_query($conn, $sql);
									while ($row=mysqli_fetch_assoc($result)) 
										{echo "{$row['admission_year']}";}?>'>
							</div>
							<br>

								<div class="form-group">
									<div class="input-group">
										<label for="current_year" class=" input-group-addon control-label">Current Year:</label>

										<select name="current_year" style="height:28px;">
											<option value="FE">FE</option>
											<option value="SE">SE</option>
											<option value="TE">TE</option>
											<option value="BE">BE</option>
										</select>
									</div>
									<br>

									
									


									

										<center>
											<button class="btn btn-success" id="submit">Submit</button>

										</center>
									</div>

								</form>
								
							</div>
							<br>

							<div class="bottom-border"></div>
							<br>
						</div>

					</div>
				</div>


									

			</body>