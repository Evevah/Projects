<?php
$servername = "localhost";
$username = "root";
$password="";
$db_name = "users";

$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error){
  die("Connection Failed: ".$conn->connect_error);

}
?>