﻿<?php
    $servername="localhost";
    $username="root";
    $password="admin";
    $dbname="rozgr";

    $user="username";
    $email="email";
    $pass="password";

    $conn=new \MySQLi($servername,$username,$password,$dbname);

    $sql="INSERT INTO USER(username,email,password) VALUES('admin','admin@admin.com','admin')";
    if(!mysqli_query($conn,"SELECT * FROM USER WHERE username='admin'")){
        if(mysqli_query($conn,$sql));
    }

    if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER["REQUEST_METHOD"] =="POST"){

        $user=htmlspecialchars($_POST['LoginUsername']);
        $pass=md5(htmlspecialchars($_POST['LoginPassword']));
        $sql="SELECT * FROM USER WHERE username='$user' AND password='$pass'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)!=0){
            echo $user;
        }
        else{
            echo "";
        }
    }
    mysqli_close($conn);
?>
