<?php  
session_start();
$cyr=$_SESSION["course-year"];
$cat=$_SESSION["category"];

 ?>
<!DOCTYPE html>

<html>
<head>
	<title>Fee Receipt-Update Fee Structure </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://www.eduvidya.com/admin/Upload/Institutes/635131178453507547_DMCE%20logo.jpg">
	<link rel="stylesheet" href=bootstrap.css>
	<link rel="stylesheet" type="text/css" href="fee_structure.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<form class="form center-block" method="post">
<div class="form-group">
	<div class="col-md-6 col-md-offset-3 table-padding details">
		<table class="table-border">
			<tr>
				<th colspan="3"><center>Fee Structure</center></th>
			</tr>
			<tr>
				<th>Sr.No</th>
				<th>Particulars</th>
				<th>Amount</th>
			</tr>
			<tr>
			<div>
				<td>1.</td>
				<td>Tuition Fees</td>
				<td><input type="number" class="form-control" id="tuition-fees" name="tuition-fees" min="0"></td>
			</tr></div>
			<tr>
				<td>2.</td>
				<td>Development Fees</td>
				<td><input type="number" name="dev-fees" min="0"></td>
			</tr>
			<tr>
				<td>3.</td>
				<td>Caution Money Deposit</td>
				<td><input type="number" name="caution-deposit" min="0"></td>
			</tr>
			<tr>
				<td>4.</td>
				<td>Enrollment Fees / Eligibility Fees</td>
				<td><input type="number" name="enroll-fees" min="0"></td>
			</tr>
			<tr>
				<td>5.</td>
				<td>Annual Contribution for Cultural Activity</td>
				<td><input type="number" name="cultural-activity" min="0"></td>
			</tr>
			<tr>
				<td>6.</td>
				<td>Disaster Relief Fund(AVHAN)</td>
				<td><input type="number" name="disaster-relief" min="0"></td>
			</tr>
			<tr>
				<td>7.</td>
				<td>University Gymkhana Fees</td>
				<td><input type="number" name="gymkhana-fees" min="0"></td>
			</tr>
			<tr>
				<td>8.</td>
				<td>University E_Charges</td>
				<td><input type="number" name="e-charges" min="0"></td>
			</tr>
			<tr>
				<td>9.</td>
				<td>Yuwa-Raksha</td>
				<td><input type="number" name="yuwa-raksha" min="0"></td>
			</tr>
			<tr>
				<td>10.</td>
				<td>University NSS Scheme</td>
				<td><input type="number" name="nss-scheme" min="0"></td>
			</tr>
			<tr>
				<td>11.</td>
				<td>Promotion of Inter Univeristy Sports and Cultural</td>
				<td><input type="number" name="inter-univeristy-sports" min="0"></td>
			</tr>
			<tr>
				<td>12.</td>
				<td>Activities (ASHWAMEDH) and (INDRADHANUSHYA)</td>
				<td><input type="number" name="activities" min="0"></td>
			</tr>
			<tr>
				<td>13.</td>
				<td>Examination Fees</td>
				<td><input type="number" name="exam-fees" min="0"></td>
			</tr>
			<tr>
				<td>14.</td>
				<td>Total Fees</td>
				<td><input type="number" name="total-fees" min="0"></td>
			</tr>
		</table>
	</div>

	<div class="col-md-6 col-md-offset-3 full-border">
		<center>
			<input type="submit" value="submit">
		</center>
	</div></div>
	</form>
	<?php 
	if($_POST){
									require_once 'includes/constants.php';
									$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, "fee_structure") or die('There was a problem connecting to the database.');
									
							$sql = "INSERT INTO `currentfeestructure`(`year`, `category`, `tution_fees`, `development_fees`, `caution_money_deposit`,`enrollment_fees`,`university_disaster_relief`,`university_gymkhana_fees`,`university_echarges`,`yuwa_raksha`,`exam_fees`,`total`) VALUES ('$cyr','$cat','{$_POST['tuition-fees']}','{$_POST['dev-fees']}','{$_POST['caution-deposit']}','{$_POST['enroll-fees']}','{$_POST['disaster-relief']}','{$_POST['gymkhana-fees']}','{$_POST['e-charges']}','{$_POST['yuwa-raksha']}','{$_POST['exam-fees']}','{$_POST['total-fees']}')";
							if (mysqli_query($conn, $sql)) { echo "Fee Structure Updated";} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}

									}
	?> 
</body>
</html>