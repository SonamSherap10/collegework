<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback_database";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";


if ($conn->query($sql) === TRUE) {
  header("Location: feedback.html");
  exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
