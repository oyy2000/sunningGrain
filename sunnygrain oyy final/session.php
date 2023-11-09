<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = new mysqli("localhost", "root", "","abc_company");


session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=$connection->query("select username from login where username='$user_check'");
$row = $ses_sql->fetch_assoc();
$login_session =$row['username'];
if(!isset($login_session)){
	$connection->close(); // Closing Connection
	header('Location: login.php'); // Redirecting To Home Page
}
?>