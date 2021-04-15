<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    header("Location:error.php?error=1000");
    die("Connection failed: " . $conn->connect_error);
}
$conn->close();
?>


