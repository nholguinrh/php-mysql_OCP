<?php
require_once("./login_db.php");

if(isset($_POST))
	{
		$sql = 'INSERT INTO `sampledb`.`User` (`name`) VALUES ("'.$name.'");';

		if ($conn->query($query) === TRUE) {
			echo "User created successfully";
		} else {
			echo "Error: <br>" . $conn->error;
		}
	}

echo '

	<h3>Add New User</h3>
	<form action="index.php" method="post">
		Name: <input type="text" id="name" name="name"><br />
		<input type = "submit" onclick="validateUserInfo()">
	</form>';
?>
