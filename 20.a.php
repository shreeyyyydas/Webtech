<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: 20.b.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? "";
    $password = $_POST['password'] ?? "";

    // Dummy user data for demonstration
    $valid_username = "katy perry";
    $valid_password = "secretsuperstar1";  // In real apps, use hashed passwords

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['user'] = $username;
        header("Location: 20.b.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login System with Session</h2>
    <?php if ($error) { echo "<p style='color:red;'>$error</p>"; } ?>

    <form method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
