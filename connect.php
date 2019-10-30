<?php
    //include 'db_connect.php';
    $Title = $_POST['Title'];
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Address3  = $_POST['Address3'];
    $Phone    =$_POST['Phone'];

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "user_information";
 
    // Create Connection
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    // Check Connection
    
    if (mysqli_connect_error()){
  		echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
    else{
        $sql = "INSERT INTO  user(Title,Firstname,Lastname,Address3,Phone)
        VALUES ('$Title','$Firstname','$Lastname','$Address3','$Phone')";
        if($conn->query($sql))
        echo"Successful";
        else{
            echo"Data failed";
        }
    }

    
    
    


?>