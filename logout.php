<?php
// Start the session
session_start();

// Clear session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or another appropriate page

header("Location: login.php");
exit();
?>
