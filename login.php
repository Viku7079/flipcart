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
            header('Location: index.html ');
            
          }
           
        }
        echo "🤞Incorect Credential Please check Email or Password";
    } else {
        echo "0 results";
    }
      
    
    $conn->close();

}

?>