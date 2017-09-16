
<!DOCTYPE html>

<html>
<head>
	<title>Fee Receipt - Add student</title>
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
                <center><div class="panel-title">Add Student</div></center>
            </div>
            <br>
            <form method="POST" >
            <label for="student_id" class="col-md-3 control-label">Student ID</label>
            <div class="col-md-9">
            
                    <input type="text" class="form-control" name="student_id" placeholder="Student ID" required="required"><br>
                </div>
                <label for="username" class="col-md-3 control-label">Username</label>
                <div class="col-md-9">
            
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required"><br>
                </div>
                 <label for="password" class="col-md-3 control-label">Password</label>
                <div class="col-md-9">
           
                    <input type="password" class="form-control" name="password" placeholder="DD/MM/YYYY" required="required" pattern="([0-9]{2})\/([0-9]{2})\/([0-9]{4})"><br>
                </div>
                <label for="student_name" class="col-md-3 control-label">Student Name</label>
                <div class="col-md-9">
            
                    <input type="text" class="form-control" name="student_name" placeholder="Student name" required="required"><br>
                </div>
                <label for="add_year" class="col-md-3 control-label">Admission year</label>
                <div class="col-md-9">
            
                    <input type="text" class="form-control" name="add_year" placeholder="YYYY" required="required" maxlength="4" pattern="[0-9]+"><br>
                </div>
                <label for="category" class="col-md-3 control-label">Category</label>
                <div class="col-md-9">
            
                    <input type="text" class="form-control" name="category" placeholder="Category[CAPS ONLY]" required="required" pattern="[A-Z]+"><br>
                </div>
                <div >
                <label for="branch" class="col-md-3 control-label">Branch</label>&nbsp &nbsp
                <select name="branch" style="height:28px;">
											<option value="COMPS">COMPS</option>
											<option value="IT">IT</option>
											<option value="ELECTRONIICS">ELECTRONIICS</option>
											<option value="MECHANICAL">MECHANICAL</option>
											<option value="CIVIL">CIVIL</option>
											<option value="CHEMICAL">CHEMICAL</option>
										</select></div>

										<br>
                <center><input type="submit" name="submit" value="Submit" /></center>

            	
            </form>
            <?php 
	if($_POST){
									require_once 'includes/constants.php';
									$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, "membership") or die('There was a problem connecting to the database.');
									
							$sql = "INSERT INTO `users`(`student_id`, `username`, `password`, `student_name`, `admission_year`,`category`,`branch`) VALUES ('{$_POST['student_id']}','{$_POST['username']}','{$_POST['password']}','{$_POST['student_name']}','{$_POST['add_year']}','{$_POST['category']}','{$_POST['branch']}')";
							if (mysqli_query($conn, $sql)) { echo "Entry added";} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}

									}
	?> 
            </div>
            <br>
            
        
            
            
	</div>
</body>
</html>
