	<?php
	session_start();

							require_once 'includes/constants.php';
							$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
							
							$sql = "SELECT `student_id` FROM `users` WHERE `username` ='{$_SESSION['username']}'";
							$result = mysqli_query($conn, $sql);
							if ($row=mysqli_fetch_assoc($result)) {
								$sid=$row['student_id'];}?>
<!DOCTYPE html>
<html>
<head>
	<title>Fee Receipt - Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://www.eduvidya.com/admin/Upload/Institutes/635131178453507547_DMCE%20logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="fee_receipt.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="form.js"></script>
</head>
<body>
<div class="col-md-6 col-md-offset-3 table-padding details">

	<br><br>
	
		<table class="table-border">
		<tr>
		<th><h2><center><img style="padding-right:2%" height="8%" width="8%" src="dmce.jpg">Datta Meghe College of Engineering</center></h2>
		<center><p>Airoli, Navi Mumbai</p></center></th>

		</tr>
		</table>
		</div>

<div class="col-md-6 col-md-offset-3 table-padding details">

	<br><br>
	
		<table class="table-border">
		<tr>
				<th colspan="2">Receipt No:</th>
				
				<th>Date :-</th>
			</tr>
			<tr>
				<th>Student ID :&nbsp<?php echo "$sid";?></th>
				<th>Class :&nbsp<?php 
	echo "{$_SESSION['current_year']}"; ?></th>
				<th>Branch :&nbsp<?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `branch` FROM `users` WHERE `username`='{$_SESSION['username']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['branch']}";}?></th>
				
			
			</tr>
			<tr>
				<th>Category :&nbsp<?php 
	echo "{$_SESSION['category']}"; ?></th>
				<th colspan="2">F.Y.Adm:&nbsp<?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `admission_year` FROM `users` WHERE `username` ='{$_SESSION['username']}'";
	$result = mysqli_query($conn, $sql);
	if ($row=mysqli_fetch_assoc($result)) {
	echo "{$row['admission_year']}";}?></th>
				
				
			
			</tr>
	<tr>
				<th colspan="3">Name :&nbsp<?php
	require_once 'includes/constants.php';
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');

	$sql = "SELECT `student_name` FROM `users` WHERE `username`='{$_SESSION['username']}'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) 
	{echo "{$row['student_name']}";}?></th>
				
				
				
			
			</tr>
				<tr>
				<th colspan="3">Particular :</th>
				
				
				
			
			</tr>

		</table>

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
		
			<tr>
				<td>18.</td>
				<td>Outstanding Fee Received(Against R.N)</td>
				<td></td>
			</tr>
			<tr>
				<td>19.</td>
				<td>Total Fees</td>
				<td></td>
			</tr>
			<tr>
				<td>20.</td>
				<td>Advanced Fees Adjusted</td>
				<td></td>
			</tr>
			<tr>
				<td>21.</td>
				<td>Fees Balance</td>
				<td></td>
			</tr>
			<tr>
				<td>22.</td>
				<td>Net Fees Received</td>
				<td></td>
			</tr>
		</table>

	</div>


</body>