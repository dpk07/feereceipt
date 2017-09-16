
<!DOCTYPE html>

<html>
<head>
	<title>Fee Receipt - Remove Student</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://www.eduvidya.com/admin/Upload/Institutes/635131178453507547_DMCE%20logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="form.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="form.js"></script>
    
</head>
<body>
	<div class="container-fluid box">
		<div class="col-md-4 col-md-offset-4 loginbox">
			<div class="panel-heading  loginheader">
                <center><div class="panel-title">Remove Student</div></center>
            </div>
            <br>
            <form method="POST" >
            <label for="student_id" class="col-md-3 control-label">Student ID</label>
            <div class="col-md-9">
            
                    <input type="text" class="form-control" name="student_id" placeholder="Student ID" required="required"><br>
                </div>
                <center><input onclick="myFunction()" type="submit" name="Delete Student" value="Delete Student" /></center>

            	
            </form>
            <script>
function myFunction() {
    confirm("Are you sure to delete?");
}
</script>

<?php 
	if($_POST){
									require_once 'includes/constants.php';
									$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, "membership") or die('There was a problem connecting to the database.');
									$sql = "DELETE FROM `users` WHERE (student_id='{$_POST['student_id']}')";
if (mysqli_query($conn, $sql)) { echo "Entry deleted";} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}}

									?>
									</div>
            <br>
            
	</div>
</body>
</html>