<?php
$server="first-connection.clk6ekw8gvww.us-east-1.rds.amazonaws.com";
$username="admin";
$password="Shivam123";
$database = "first_db";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
  die("Error Detected".mysqli_error($conn));
}
?>