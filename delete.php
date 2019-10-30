<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user_information";

// Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM user WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>