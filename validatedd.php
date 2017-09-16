
<!DOCTYPE html>

<html>
<head>
	<title>Fee Receipt - DD details</title>
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
                <center><div class="panel-title"><h3>DD details</h3></div></center>
            </div>
            <br>
            <?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, "dd_details") or die('There was a problem connecting to the database.');
	$result = mysqli_query($conn,"SELECT * FROM dd");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysqli_num_fields($result);

echo "<h1>Table: DD details</h1>";
echo "<table border='1'><tr>";

for($i=0; $i<$fields_num; $i++)
{
    $field = mysqli_fetch_field($result);
    echo "<td><h4>{$field->name}</h4></td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysqli_fetch_row($result))
{
    echo "<tr>";

    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysqli_free_result($result);?>
<form onsubmit="window.location.reload()" method="post">
	<label for="dd_no" class="col-md-3 control-label">Enter DD number to validate</label>
            <div class="col-md-9">
            
                    <input type="number" class="form-control" name="dd_no" placeholder="DD Number" required="required"><br>
                </div>
                <input  type="submit" name="Validate DD" value="Validate DD" />
                <br><br>
               

</form>
<?php 
	if($_POST){
									require_once 'includes/constants.php';
									$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, "dd_details") or die('There was a problem connecting to the database.');
									
							$sql = $sql = "UPDATE dd SET dd_validation=1 WHERE dd_number='{$_POST['dd_no']}'";
							echo "<meta http-equiv='refresh' content='0'>";
							if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}

									}
	?> 
	</body>
	</html>