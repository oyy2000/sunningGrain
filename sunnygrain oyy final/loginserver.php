<?php
session_start(); // Starting Session
$errors=array(); // Variable To Store Error Message

if (isset($_POST['submit'])) {  //isset如果变量已经声明返回true
    if ($_POST['captcha']==$_SESSION['authcode']) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            array_push($errors,"Username or Password is Empty");
        }

        else{
            // Define $username and $password
            $username=$_POST['username'];
            $password=$_POST['password'];

            // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            $connection = new mysqli("localhost", "root", "", "abc_company");
            if ($connection->connect_errno) {
                echo "Sorry, this website is experiencing problems.";
                echo "Error: Failed to make a MySQL connection, here is why: \n";
                echo "Errno: " . $connection->connect_errno . "\n";
                echo "Error: " . $connection->connect_error . "\n";
                exit;
            }
            // Functions for preventing both SQL and XSS injection attacks
            function get_post($var){
                global $connection;
                return htmlentities($connection->real_escape_string($_POST[$var]));
            }
            // To protect MySQL injection for Security purpose
            $username = stripslashes(trim($username));
            $password = stripslashes(trim($password));
            $username = $connection->real_escape_string($username);
            $password = $connection->real_escape_string($password);

            // SQL query to fetch information of registerd users and finds user match.
            $password=md5($password);
            $query="select * from login where password='$password' AND username='$username'";
            $result = $connection->query($query);
            $rows = $result->fetch_assoc();

            if ($rows) {
                // starting session
                $_SESSION['login_user']=$username; // Initializing Session
                header("location: products.php"); // Redirecting To Other Page
            }
            else {
                array_push($errors,"Username or Password is invalid");
            }
            $connection->close(); // Closing Connection
        }


    }
    else{
        array_push($errors,"Captcha is wrong");
    }




}
?>