<?php
session_start();
// Unset the session
session_unset();
// Destroy the session
session_destroy();
// Redirect to the homepage
header("Location: index.php");
exit;

?>