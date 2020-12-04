<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "kaytonfroeschl", "aiX3uish", "kaytonfroeschl");
	/* check connection */ 
	if ($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
    }

	$user = $_POST["username"];


	$query = "INSERT INTO Users (user_id) VALUES ('$user')";

	if($user == ""){
		echo "You did not put in a username.";
	}
	else if (mysqli_query($mysqli, $query)) {
		  echo "New record created successfully";
	} 
	else {
		  echo "That username is already in the database.";
	}


	
  	

    $mysqli->close();				
?>


