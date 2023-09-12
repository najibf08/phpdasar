<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$db_name = "db_sekolah";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
echo "Login Berhasil, Halloo";
}
?>