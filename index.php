<?php
require_once("./login_db.php");

if(isset($_POST))
	{
		$sql = 'INSERT INTO `php-mysql_OCP`.`User` (`name`) VALUES ("'.$_POST["name"].'");';
		if ($mysqli->query($query) === TRUE) 
			echo "User created successfully <br>"; 
		else
			echo "Error: <br>" . $conn->error."<br>";
	}

echo '
	<form action="index.php" method="post">
		Name: <input type="text" id="name" name="name"><br />
		<input type = "submit">
	</form>';

$nombre=$mysqli->query("SELECT * FROM `php-mysql_OCP`.`User`");
for($i=0;$i<count($nombre,0);$i++)
	echo $i." : ".$nombre[$i][0].".<br>";
?>
