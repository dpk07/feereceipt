<?php  
session_start();
if($_POST)
{
$_SESSION["course-year"] = $_POST['course-year'];
$_SESSION["category"] = $_POST['category'];
header("location: fee_structure.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fee Structure - Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://www.eduvidya.com/admin/Upload/Institutes/635131178453507547_DMCE%20logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fee.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
	<div class="container-fluid box">
		<div class="col-md-4 col-md-offset-4 loginbox">
			
				<div class="panel-heading loginheader">
					<div class="panel-title">Fee Structure</div>
				</div>
				<br>
				<form method="post">
				<div class="form-group row">
					<label class="col-sm-4 col-form-label" >Calendar Year :</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="calendar-year" name="calendar-year" placeholder="Calendar Year">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Course Year :</label>
					<div class="col-sm-8">
						<select id="course-year" class="form-control" name="course-year" required="">
							<option value="Select One">Select One</option>
							<option value="FE">FE</option>
							<option value="SE">SE</option>
							<option value="TE">TE</option>
							<option value="BE">BE</option>
							<option value="Extra-year">Extra Year</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Category :</label>
					<div class="col-sm-8">
						<select id="category" class="form-control" name="category" required="">
							<option value="Select One">Select One</option>
							<option value="OPEN">OPEN</option>
							<option value="OBC">OBC</option>
							<option value="ST/SC">ST/SC</option>
							<option value="VJ/DT/NT/SBC">VJ/NT/SBC</option>
							<option value="TFWS">TFWS</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div>
						<center><button type="submit" class="btn btn-success">Submit</button></center>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>