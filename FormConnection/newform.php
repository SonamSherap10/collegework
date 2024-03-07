
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>

<?php
$employees = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];


    $employees[] = ["id" => $id, "name" => $name, "phone" => $phone];

    
    echo "<h2>Information</h2>";
    echo "<table border='1'>
            <tr>
                <th>EID</th>
                <th>Name</th>
                <th>Phone</th>
            </tr>";

    
    foreach ($employees as $employee) {
        echo "<tr>
                <td>{$employee['id']}</td>
                <td>{$employee['name']}</td>
                <td>{$employee['phone']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No data submitted</p>";
}
?>

</body>
</html>
