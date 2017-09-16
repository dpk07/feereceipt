	
	
<?php 

									require_once 'includes/constants.php';
									$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB3_NAME) or die('There was a problem connecting to the database.');
									
							$sql = "INSERT INTO dd(student_id, dd_number, dd_date, dd_bank, dd_amount)
									VALUES (1234,1234,2016-10-22,'sars',1250)";
									if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
									?>

