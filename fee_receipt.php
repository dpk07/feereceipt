	<?php
	session_start();

							require_once 'includes/constants.php';
							$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
							
							$sql = "SELECT `student_id` FROM `users` WHERE `username` ='{$_SESSION['username']}'";
							$result = mysqli_query($conn, $sql);
							if ($row=mysqli_fetch_assoc($result)) {
								$sid=$row['student_id'];}


								?>

	
	<!DOCTYPE html>
	<html>
	<head>
	<title>Fee Receipt- Fee details</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://www.eduvidya.com/admin/Upload/Institutes/635131178453507547_DMCE%20logo.jpg">
	<link rel="stylesheet" href=bootstrap.css>
	<link rel="stylesheet" type="text/css" href="fee_receipt.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	</head>
	<body>
	<div class="col-md-6 col-md-offset-3 details">
	<form class="form center-block" method="post">

	<div class="form-group">
	<label for="firstname" class="col-md-3 control-label">Gr.No:</label>
	<div class="col-md-9">
	<input type="text" class="form-control" name="firstname" placeholder="Gr.No" value="<?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `student_id` FROM `users` WHERE `username` ='{$_SESSION['username']}'";
	$result = mysqli_query($conn, $sql);
	if ($row=mysqli_fetch_assoc($result)) {
	echo "{$row['student_id']}";}?>"><br>
	</div>
	</div>
	<div class="form-group">
	<label for="firstname" class="col-md-3 control-label">Admission Year:</label>
	<div class="col-md-9">
	<input type="text" class="form-control" name="firstname" placeholder="Admission Year" value="<?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `admission_year` FROM `users` WHERE `username` ='{$_SESSION['username']}'";
	$result = mysqli_query($conn, $sql);
	if ($row=mysqli_fetch_assoc($result)) {
	echo "{$row['admission_year']}";}?>"><br>
	</div>
	</div>
	<div class="form-group">
	<label for="firstname" class="col-md-3 control-label">Name:</label>
	<div class="col-md-9">
	<input type="text" class="form-control" name="firstname" placeholder="Name" value='<?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `student_name` FROM `users` WHERE `username`='{$_SESSION['username']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['student_name']}";}?>'><br>
	</div>
	</div>
	<div class="form-group">
	<label class="col-md-3 control-label">Current Year:</label>
	<div class="col-md-9">
	<input type="char" class="form-control" name="firstname" placeholder="Current Year" value=
	<?php 
	echo "{$_SESSION['current_year']}"; ?>><br>
	</div>
	</div>
	<div class="form-group">
	<label class="col-md-3 control-label">Branch:</label>
	<div class="col-md-9">
	<input type="text" class="form-control" name="firstname" placeholder="Branch" value="<?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `branch` FROM `users` WHERE `username`='{$_SESSION['username']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['branch']}";}?>"><br>
	</div>
	</div>

	</form>
	</div>
	<div class="col-md-6 col-md-offset-3 table-padding">
	<!--<table class="table-border ">
	<tr>
	<th>YEAR &nbsp  </th>
	<th>APPROVED FEES</th>
	<th>FEES PAID (SELF)</th>
	<th>GOVT.TUTION FEES</th>
	<th>BAL.FEES (SELF)</th>
	<th>BAL.FEES (GOVT)</th>
	</tr>
	<tr>
	</tr>
	<tr>
	<td id="">FE</td>
	<td id=""></td>
	<td id=""></td>
	<td id=""></td>
	<td id=""></td>
	<td id=""></td>
	</tr>
	</table>-->

	</div>



	<div class="col-md-6 col-md-offset-3 table-padding details">

	<br><br>

	<table class="table-border">
	<tr>
	<th>Sr.No</th>
	<th>Particulars</th>
	<th>Amount</th>
	</tr>
	<tr>
	<td>1.</td>
	<td>Tuition Fees</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `tution_fees` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['tution_fees']}";}?></td>
	</tr>
	<tr>
	<td>2.</td>
	<td>Development Fees</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `development_fees` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['development_fees']}";}?></td>
	</tr>
	<tr>
	<td>3.</td>
	<td>Other Fees</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `other_fees` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['other_fees']}";}?></td>
	</tr>
	<tr>
	<td>4.</td>
	<td>Caution Money Deposit</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `caution_money_deposit` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['caution_money_deposit']}";}?></td>
	</tr>
	<tr>
	<td>5.</td>
	<td>Enrollment Fees / Examination Fees</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `enrollment_fees` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['enrollment_fees']}";}?></td>
	</tr>
	<tr>
	<td>6.</td>
	<td>Form Fees / Addidtional Fees</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `form_fees` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['form_fees']}";}?></td>
	</tr>
	<tr>
	<td>7.</td>
	<td>University Sports & Cul Act. Fees</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `university_sports_fees` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['university_sports_fees']}";}?></td>
	</tr>
	<tr>
	<td>8.</td>
	<td>University Annual Contribution</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `university_annual_contribution` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['university_annual_contribution']}";}?></td>
	</tr>
	<tr>
	<td>9.</td>
	<td>University Disaster Relief Fund</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `university_disaster_relief` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['university_disaster_relief']}";}?></td>
	</tr>
	<tr>
	<td>10.</td>
	<td>University Gymkhana Fees</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `university_gymkhana_fees` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['university_gymkhana_fees']}";}?></td>
	</tr>
	<tr>
	<td>11.</td>
	<td>University E_Charges</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `university_echarges` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['university_echarges']}";}?></td>
	</tr>
	<tr>
	<td>12.</td>
	<td>Yuwa-Raksha</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `yuwa_raksha` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['yuwa_raksha']}";}?></td>
	</tr>
	<tr>
	<td>13.</td>
	<td>Outstanding Fees</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `outstanding_fees` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['outstanding_fees']}";}?></td>
	</tr>
	<tr>
	<td>14.</td>
	<td>Others</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `others` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['others']}";}?></td>
	</tr>
	<tr>
	<td>15.</td>
	<td>Total</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `total` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['total']}";}?></td>
	</tr>
	<tr>
	<td>16.</td>
	<td>Fees Balance</td>
	<td><?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB2_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `fees balance` FROM `currentfeestructure` WHERE `category`='{$_SESSION['category']}' AND `year`='{$_SESSION['current_year']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['fees balance']}";}?></td>
	</tr>
	<tr>
	<td>17.</td>
	<td>Net Fees Received</td>
	<td></td>
	</tr>
	</table>
	<?php
	require_once 'includes/constants.php';
	$valid=0;
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, "dd_details") or die('There was a problem connecting to the database.');

	$sql = "SELECT `dd_validation` FROM `dd` WHERE `student_id`='$sid'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{$valid = $row['dd_validation'];}?>


	</div>
	<br>
	<br>
	<div  class="col-md-6 col-md-offset-3 details">
	<br><br>
	<form class="form2" method="POST">
	<div id="dd">
	<div class="form-group col-md-6">
	<label class="col-md-3 control-label">DD Number:</label>
	<div class="col-md-9">
	<input type="number" class="form-control" placeholder="DD Number" name="dd_number" required="required"><br>
	</div>
	</div>
	<div class="form-group col-md-6">
	<label class="col-md-3 control-label">Dated:</label>
	<div class="col-md-9">
	<input type="date" class="form-control" placeholder="Date" name="dd_date" required="required"><br>
	</div>
	</div>
	<div class="form-group col-md-6">
	<label class="col-md-3 control-label">Drawn On:</label>
	<div class="col-md-9">
	<input type="text" class="form-control" placeholder="Bank Name" name="dd_bank" required="required"><br>
	</div>
	</div>
	<div class="form-group col-md-6">
	<label class="col-md-3 control-label">DD Amount:</label>
	<div class="col-md-9">
	<input type="text" class="form-control" placeholder="DD Amount" name="dd_amount" required="required"><br>
	</div></div>
	
	
	
	<center>
	&nbsp
	<button class="btn btn-info" type="submit" title="Submit">Sumbit</button>&nbsp

	<button class="btn btn-warning" id="resetbtn" title="Clear all text fields">Clear</button></div>
	</form><br>
	<center>
	<form method="get" action="print.php">
    <button class="btn btn-primary" type="submit" <?php if ($valid == '0'){ ?> disabled <?php   } ?>>Print</button>
</form></center>
	<?php 
	if($_POST){
									require_once 'includes/constants.php';
									$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB3_NAME) or die('There was a problem connecting to the database.');
									
							$sql = "INSERT INTO `dd`(`student_id`, `dd_number`, `dd_date`, `dd_bank`, `dd_amount`) VALUES ('$sid','{$_POST['dd_number']}','{$_POST['dd_date']}','{$_POST['dd_bank']}','{$_POST['dd_amount']}')";
							if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}

									}
	?> 

	</center>
	<?php 
?>
	<br>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>	
	<script type="text/javascript">
	$("#resetbtn").click(function(){
	$('.form1')[0].reset();
	$('.form2')[0].reset();
	});

	if ( <?php echo $valid; ?>  == 1){document.getElementById('dd').setAttribute("style", "display:none")};
	</script>
	</body>
	</html>