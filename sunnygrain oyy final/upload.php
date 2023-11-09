<?php

    $con=  "*Content* :".$_GET['Content']."\n";
    $name ="***Name** :". $_GET['Name']."\n";
    $email="**Email** :".$_GET['Email']."\n";
    $sub = "*Subject* :".$_GET['Subject']."\n";

    $con = stripslashes(trim($review));
    $con = $link->real_escape_string($review);
    $name = stripslashes(trim($name));
    $name = $link->real_escape_string($name);
    $email = stripslashes(trim($email));
    $email = $link->real_escape_string($email);
    $sub = stripslashes(trim($sub));
    $sub = $link->real_escape_string($sub);
//To avoid SQL injection
    $str = $name.$email.$sub.$con."\n\n";
    file_put_contents('html.txt',$str.PHP_EOL, FILE_APPEND);
    //This sentence add message to the end of the text file
    header("location:contact.html");
?>