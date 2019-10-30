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

$sql = "UPDATE `user` SET username='Bakhtawar' WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>