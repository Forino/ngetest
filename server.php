<?php
	
	$name = "";
	$address = "";
	$id = 0;
	M
	
	// connect to database
	$db = mysqli_connect('localhost','root','','crud');
	
	// if save button is clicked
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		
		$query = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
		mysqli_query($db, $query);
		header('location: index.php');
		
	}
	

?>