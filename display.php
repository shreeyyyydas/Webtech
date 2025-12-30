<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>
<body>
    <h2>Your Registration Details</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $gender = htmlspecialchars($_POST['gender']);
        $course = htmlspecialchars($_POST['course']);

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";

        if (!empty($_POST['hobbies'])) {
            $hobbies = $_POST['hobbies'];
            // Sanitize each hobby value
            $hobbies = array_map('htmlspecialchars', $hobbies);
            echo "<p><strong>Hobbies:</strong> " . implode(", ", $hobbies) . "</p>";
        } else {
            echo "<p><strong>Hobbies:</strong> None selected</p>";
        }
        echo "<p><strong>Course:</strong> $course</p>";
    } else {
        echo "<p>No data received.</p>";
    }
    ?>
</body>
</html>
