<?php
    if($_POST['signup']){
        // Database connection
        require "dbconnection.php";

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
         
        //Insert data into table
        $sql="insert into user(name,email,password) values('$name','$email','$password')";
        if ($conn->query($sql) === TRUE) {
            header('Location: login.html');
        }
        else{
            echo "Something Error, Please try again.";
        }

        $conn->close();
    }
?>