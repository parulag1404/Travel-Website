<?php

 $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel";
    
// connection to the database
    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){
        echo "Databse connection error : "+mysqli_error($conn);
    }else{
        echo "Connection established";
    }

session_start(); 

$email=$_POST['email'];
$password=$_POST['password'];

$result=mysql_query("SELECT count(*) FROM userinfo WHERE email='$email' and password='$password'");

$count=mysql_fetch_array($result);

if($count==0){
  session_register("username");
  session_register("password");
 
} else {
  echo 'Wrong Username or Password! Return to <a href="home.html">login</a>';
  }
?>