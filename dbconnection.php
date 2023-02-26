<?php
//Database Connection
$db_name="flipcart";
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,$db_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>