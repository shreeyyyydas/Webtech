<!DOCTYPE html>
<html>
<body>

<?php
$cookie_name = "userFavoriteLanguage";
$cookie_value = "Python with AI & Automation";

// Set the cookie for whole website, expires in 7 days
setcookie($cookie_name, $cookie_value, time() + (7 * 24 * 60 * 60), "/");


if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie '{$cookie_name}' is not set yet. Refresh after setting it.";
} else {
    echo "Welcome back! Your favorite coding language is <strong>" . htmlspecialchars($_COOKIE[$cookie_name]) . "</strong>.";
}
?>

</body>
</html>
