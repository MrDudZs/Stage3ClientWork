<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to index.php
header("Location: login.php");
exit;
?>
