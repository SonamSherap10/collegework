
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Insert data into the basicform table
    $sql = "INSERT INTO basicform (name, email) VALUES ('$name', '$email')";
    $result = mysqli_query($conn, $sql);

    // Check if insertion was successful
    if ($result) {
        echo "Successfully Added";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>
    <h2>Enter Your Information</h2>
    <form action="index.php" method="post">
        <!-- Note: action points to index.php, the same file -->
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>
</html>
        