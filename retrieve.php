<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user_information";
//$fname=$_POST['fname'];
//$lname=$_POST['lname'];
//$email=$_POST['email'];
// Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `id`, `username`, `password` FROM `user` WHERE 1";
$run = $conn->query($sql);

if ($run->num_rows > 0) {
    // output data of each row
    while($row = $run->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. "-Password" . $row["password"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>