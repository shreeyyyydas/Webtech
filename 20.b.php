<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: 20.a.php");
    exit;
}

$username = htmlspecialchars($_SESSION['user']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>You have successfully logged in.</p>
    <a href="20.c.php">Logout</a>
</body>
</html>
