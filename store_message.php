<?php

session_start();

$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "portfolio";
$table = "users_email";

$conn = new mysqli($servername, $username, $dbpass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $email = $tel = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  if (isset($_POST["tel"])) {
    $tel = $_POST["tel"];
  }
}

$sql = "INSERT INTO " . $table . " (name, email, tel)
  VALUES ('" . $name . "', '" . $email . "', '" . $tel . "')";

if ($conn->query($sql) === TRUE) {
  $_SESSION["stored"] = true;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php#contatti");

?>
