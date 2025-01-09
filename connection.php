<?php
$servername = "fdb32.awardspace.net";
$username = "17042003_ocs";
$password = "raj123";
$db = "3990962_ocs";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>