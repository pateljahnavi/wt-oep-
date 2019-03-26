<?php

$email = $_POST['email'];
$psw = $_POST['psw'];
$address = $_POST['address'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
    die("Connection failed".mysqli_connect_error());
}
else
    echo "successfull";
$insert = "INSERT INTO signup(email, password, address) VALUES('$email','$psw','$address')";
if(mysqli_query($conn,$insert)==TRUE)
{
    echo "new records inserted";
}
else
{
    echo "error " .$insert."<br>".$conn->error;
}
$conn->close();
?>