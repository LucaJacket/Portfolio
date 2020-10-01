<?php

$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "portfolio";
$table = "users_email";

$conn = new mysqli($servername, $username, $dbpass);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS " . $dbname;
if ($conn->query($sql) === FALSE) {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

$conn = new mysqli($servername, $username, $dbpass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS " . $table . " (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30),
email VARCHAR(50),
tel VARCHAR(15)
)";

if ($conn->query($sql) === FALSE) {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
