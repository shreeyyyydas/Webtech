<?php
$servername = "localhost";
$username = "root";
$password = "nik@123N";
$database = "testdb";

// Connect to database
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create colors table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS colors (
    id INT PRIMARY KEY,
    color_name VARCHAR(20)
)");

// Create shapes table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS shapes (
    id INT PRIMARY KEY,
    shape_name VARCHAR(20)
)");

// Insert sample values if not already present
$conn->query("INSERT IGNORE INTO colors (id, color_name) VALUES
    (1, 'Red'), (2, 'Green'), (3, 'Blue')");

$conn->query("INSERT IGNORE INTO shapes (id, shape_name) VALUES
    (1, 'Circle'), (2, 'Square')");

// CROSS JOIN query
$sql = "SELECT colors.color_name, shapes.shape_name
        FROM colors
        CROSS JOIN shapes";

$result = $conn->query($sql);

echo "<h2>CROSS JOIN Result</h2>";
if ($result && $result->num_rows > 0) {
    echo "<table border='1' cellpadding='5'><tr><th>Color</th><th>Shape</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row['color_name']) . "</td><td>" . htmlspecialchars($row['shape_name']) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No results found or query error: " . $conn->error;
}

$conn->close();
?>
