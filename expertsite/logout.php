<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['print']);
unset($_SESSION['userid']);
unset($_SESSION['role']);
// Delete all session variables
 session_destroy();

// Jump to login page
header('Location: index');

?>