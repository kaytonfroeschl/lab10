<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "kaytonfroeschl", "aiX3uish", "kaytonfroeschl");
	/* check connection */ 
	if ($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
    }

	$user = $_POST["user"];

	$query = "SELECT * FROM Posts";

	if($result = mysqli_query($mysqli, $query)){
		while($row = $result->fetch_assoc()){
			if($user == $row["author_id"]){
				echo "".$row["content"]."<br>";
			}
			
		}
	}

?>
