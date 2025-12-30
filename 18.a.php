<!DOCTYPE html>
<html>
<head>
    <title>Update User Data</title>
</head>
<body>
    <h2>Update User Data</h2>

    <?php
    // Connect to MySQL database
    $conn = new mysqli("localhost", "root", "nik@123N", "simpledb");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if form is submitted for update
    if (isset($_POST['update'])) {
        $id = intval($_POST['id']);
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);

        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Record updated successfully.</p>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // If id is passed via GET, show the form with data to edit
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $result = $conn->query("SELECT * FROM users WHERE id=$id");
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
    ?>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br><br>
        <input type="submit" name="update" value="Update">
    </form>
    <?php
        } else {
            echo "No record found with that ID.";
        }
    } else {
        echo "No user selected to update.";
    }

    $conn->close();
    ?>
</body>
</html>
