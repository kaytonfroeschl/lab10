<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "kaytonfroeschl", "aiX3uish", "kaytonfroeschl");
	/* check connection */ 
	if ($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
    }

	
	$query = "SELECT * FROM Users";
	echo "Users <br>";

	if($result = mysqli_query($mysqli, $query)){
		while($row = $result->fetch_assoc()){
			echo "".$row['user_id']."<br>";
		}
  	}
	else{
		echo "Something went wrong.";
	}

    $mysqli->close();				
?>


