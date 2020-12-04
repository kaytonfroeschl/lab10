
<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "kaytonfroeschl", "aiX3uish", "kaytonfroeschl");         
if ($mysqli->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}


$query = "SELECT * FROM Posts";

$i = 1;

echo "You have sucessfully deleted post(s): <br>";


 if($result = mysqli_query($mysqli, $query)){
	while($row = $result->fetch_assoc()){
		$postID = $row["post_id"];
		if(isset($_POST[$postID])){
			$sql = "DELETE FROM Posts WHERE post_id = $postID";
			if($mysqli->query($sql) === TRUE){
				echo "$_POST[$postID] <br>";
			}
			else{
				echo "Error deleting record: ".$mysqli->error."<br>";
			}
		}
		
		$i++;
	}
}

$mysqli->close();
?>
