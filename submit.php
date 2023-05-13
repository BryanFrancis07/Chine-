<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userid =  substr(uniqid(), 0, 8);
  $Firstname = $_POST["fname"];
  $Lastname = $_POST["lname"];
  $email = $_POST["email"];
  $Phone = $_POST['phone'];
  $Password = $_POST["pswd"];



$servername = "localhost";
$username = "root";
$password = "root";
$dbName = "chine's-database";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

$sql = "INSERT INTO users (user_id, firstname, lastname, email, phone, password)
VALUES ('$userid', '$Firstname', '$Lastname', '$email', '$Phone', '$Password ')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
}

?>
</body>
</html>