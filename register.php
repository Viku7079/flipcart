<?php
require "dbconnection.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql="insert into user(name,email,password) values('$name','$email','$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      }


$conn->close();
?>