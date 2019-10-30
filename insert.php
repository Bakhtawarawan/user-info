<?php
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
    $conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);

    $query="INSERT INTO  user(Title,Firstname,Lastname,Address3,Phone)
    VALUES ('$Title','$Firstname','$Lastname','$Address3','$Phone')";

    $run= mysqli_query($conn,$query);
    if($run==TRUE)
    echo"Successfull";
    echo"<script> window.location.assign('form.html');</script>";

?>