<!DOCTYPE html>
<html>

<head>
	<title>Transplant</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "transplantdetails");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$firstname = $_REQUEST['firstname'];
        $email = $_REQUEST['email'];
        $mobileno = $_REQUEST['mobileno'];
		$address = $_REQUEST['address'];
		$state = $_REQUEST['state'];
		$city = $_REQUEST['city'];
		$cause = $_REQUEST['cause'];
		$aboutwhatpbm = $_REQUEST['aboutwhatpbm'];
		$uploadimage = $_REQUEST['uploadimage'];

		// Performing insert query execution
		// here our table name is first_aid
		$sql = "INSERT INTO cause (firstname, email, mobileno, address, state, city, cause, aboutwhatpbm,uploadimage) 
				VALUES ('$firstname', '$email', '$mobileno', '$address', '$state', '$city', '$cause', '$aboutwhatpbm','$uploadimage')";
		
		if(mysqli_query($conn, $sql)){

			echo "<h3>Data stored in the database successfully."
				. " Please browse your localhost phpMyAdmin"
				. " to view the updated data</h3>"; 

			echo nl2br("\nFirstname: $firstname\nEmail: $email\nMobile No: $mobileno\nAddress: $address\nState: $state\nCity: $city\nProblem: $cause\nAbout Problem: $aboutwhatpbm");
		} else{
			echo "ERROR: Could not able to execute $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
