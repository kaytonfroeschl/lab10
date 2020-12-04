<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "kaytonfroeschl", "aiX3uish", "kaytonfroeschl");
	/* check connection */ 
	if ($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
    }

	$user = $_POST["username"];
	$post = $_POST["post"];
	$key = false; 

	
	$query = "SELECT * FROM Users";

	if($post == ""){
		echo "You have to write something to post.";
	}
	else if($result = mysqli_query($mysqli, $query)){
		while($row = $result->fetch_assoc()){
			if($user == $row["user_id"]){
				$key = true; 
				$query = "INSERT INTO Posts (content, author_id) VALUES ('$post', '$user')";
				if($result = mysqli_query($mysqli, $query)){
					echo "Your post has been saved.";
				}
				else{
					echo "For some reason your post did not save.";
				}

				break;
			}
		}
		if($key == false){
			echo "I do not recognize this username.";
		}
	}
	else{
		echo "There are no found usernames.";
	}
	
  	

    $mysqli->close();				
?>

