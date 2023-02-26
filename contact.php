<?php
if($_POST['sendData']){
    // Database connection
    require "dbconnection.php";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $message=$_POST['message'];
    
     
        //Insert data into table
        $sql="insert into contact(name,email,mobile,message) values('$name','$email','$mobile','$message')";
        if ($conn->query($sql) === TRUE) {
            $mess="Form Submited Sucessfully.";
            header("location: contact.html?mess=".$mess);
        }
        else{
            
            echo "Something Error, Please try again.";
        }
        

        $conn->close();
}
?>