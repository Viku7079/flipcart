<?php
    if($_POST['login']){
        require "dbconnection.php";
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="select * from user";
        $result=$conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            if( $row["email"]==$email &&  $row["password"]==$password){
                header('Location: index.php');
            }
            
            }
            echo "👉 Incorrect Email or Password";
        }
        $conn->close();

    }
?>