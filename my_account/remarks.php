<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_account";
$date = $_POST["date"];

$remarks = $_POST["remarks"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error); 
    
}
$sql = "INSERT INTO remarks (date,remarks) VALUES ('$date','$remarks')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Submitted Successfully')</script>";
    header("location: remarks.html");
}
else {
    echo "<script type='text/javascript'>alert('Error')</script>" . $sql . "<br>" . $conn->error;
}


$conn->close();
    
?>
