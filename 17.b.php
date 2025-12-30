<!DOCTYPE html>
<html>
<head>
    <title>View Data from Database</title>
</head>
<body>
    <h2>Users List</h2>

    <?php
    // Connect to MySQL database
    $conn = new mysqli("localhost", "root", "nik@123N", "simpledb");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Select all data
    $sql = "SELECT id, name, email FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='5'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . htmlspecialchars($row["name"]) . "</td><td>" . htmlspecialchars($row["email"]) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    $conn->close();
    ?>
</body>
</html>
