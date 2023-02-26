<?php
if($_POST['submit']){
    require "dbconnection.php";
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from user";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if( $row["email"]==$email &&  $row["password"]==$password){
            header('Location:');
          }
           
        }
        echo "Incorect Credential Please check Email or Password";
    } else {
        echo "0 results";
    }
      
    if ($conn->query($sql) === TRUE) {
        header('Location:');
    }
    else{
        echo "Something Error, Please try again.";
    }

    $conn->close();

    }
?>