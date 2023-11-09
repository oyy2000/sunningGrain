<?php

include('session.php');

if (!isset($login_session)) {
    header("location:login.php");
}


// 连接mysql
$link = new mysqli("localhost", "root", "", "abc_company");




$name = $_POST['name'];
$name = stripslashes(trim($name));
$name = $link->real_escape_string(trim($name));
$review = $_POST['review'];
$review = stripslashes(trim($review));
$review = $link->real_escape_string($review);
//To avoid SQL injection

$sql = "INSERT INTO products VALUES('$name','$review','$login_session') ";
//The primarykey consist of review and username,incase that one user send the same review once and once again.
$link->query($sql);

header("location: products.php");
?>