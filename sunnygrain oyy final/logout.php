<?php
session_start();
$_SESSION = array();   // Clearing all session data

// Delete the cookie that stores the session ID to KILL the session
  if (isset($_COOKIE[session_name()]))
    setcookie(session_name(), '', time()-3600, '/');

if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>