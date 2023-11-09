<?php
//delete.php
$link= new mysqli("localhost", "root", "", "abc_company");

$name = $_POST['name2'];
$name = stripslashes(trim($name));
$name = $link->real_escape_string(trim($name));
$username = $_POST['username2'];
$username = stripslashes(trim($username));
$username = $link->real_escape_string(trim($username));
$review = $_POST['review2'];
$review = stripslashes(trim($review));
$review = $link->real_escape_string(trim($review));


$result = $link->query("DELETE FROM products WHERE name='$name' and review = '$review' and username = '$username'");

header("location:products.php");
?>

