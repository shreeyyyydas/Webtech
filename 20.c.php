<?php
session_start();
session_unset();
session_destroy();
header("Location: 20.a.php");
exit;
?>
