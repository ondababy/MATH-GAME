<?php 
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "elementary_db";

$conn = mysqli_connect($db_host, $db_username, $db_password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!mysqli_select_db($conn, $db_name)) {
    die("Could not select the database $db_name: " . mysqli_error($conn));
}

// echo "Connection established and database selected successfully.\n";
?>
