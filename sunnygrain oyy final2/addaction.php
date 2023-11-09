<?php
include('session.php');//first check if there is a user have login.
if (!isset($login_session)) {
    header("location:login.php");
}

$link = new mysqli("localhost", "root", "", "abc_company");

$name = $_POST['name'];
$name = stripslashes(trim($name));
$name = $link->real_escape_string($name);
$review = $_POST['review'];
$review = stripslashes(trim($review));
$review = $link->real_escape_string($review);
//To avoid SQL injection

$sql = "INSERT INTO products VALUES('$name','$review','$login_session') ";
//The primarykey consist of review and username and name,incase that one user send the same review once and once again.
$link->query($sql);

header("location: products.php");
?>

