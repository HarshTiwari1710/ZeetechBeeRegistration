<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zee";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
echo $_POST["name"];

$sqlquery = "INSERT INTO `registration`(`name`, `email`, `number`, `gender`, `city`, `state`,`nationality`, `marks`, `passing10`, `marks12`, `passing12`, `image`, `adhar`) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["number"]."','".$_POST["gender"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["nationality"]."','".$_POST["marks"]."','".$_POST["passing10"]."','".$_POST["marks12"]."','".$_POST["passing12"]."','".$_POST["image"]."','".$_POST["adhar"]."')";

// 
// 
// `gender`,  `nationality`, `image`, `adhar`,
//

if ($conn->query($sqlquery) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sqlquery . "<br>" . $conn->error;
}	
?>