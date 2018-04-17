<?php

$mysqli = new mysqli("localhost", "cs332s43", "cootieng", "cs332s43");

$result = $mysqli->query("SELECT fname FROM student");

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "fname:" . $row["fname"] . "<br>";
	}
}


?>
