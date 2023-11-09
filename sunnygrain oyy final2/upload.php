<?php

    $con=  "*Content* :".$_GET['Content']."\n";
    $name ="***Name** :". $_GET['Name']."\n";
    $email="**Email** :".$_GET['Email']."\n";
    $sub = "*Subject* :".$_GET['Subject']."\n";

    $con = stripslashes(trim($review));

    $name = stripslashes(trim($name));

    $email = stripslashes(trim($email));

    $sub = stripslashes(trim($sub));

//To avoid SQL injection
    $str = $name.$email.$sub.$con."\n\n";
    file_put_contents('html.txt',$str.PHP_EOL, FILE_APPEND);
    //This sentence add message to the end of the text file
    header("location:contact.html");
?>


