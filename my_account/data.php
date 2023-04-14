<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_account";
$userid=$_POST["userid"];
$pswd=$_POST["password"];


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error); 
    
}
$sql = "insert into admin(userid,password) values ('$userid','$pswd')";


if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Submitted Successfully')</script>";
    header("location: index.html");
}
else {
    echo "<script type='text/javascript'>alert('Error')</script>" . $sql . "<br>" . $conn->error;
}


$conn->close();
    
?>
