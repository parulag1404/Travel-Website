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

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["psw"];

    $query = "INSERT INTO userinfo (fname,lname,email, password) VALUES ('$fname','$lname','$email','$password');";

    if(mysqli_query($conn,$query)){
        echo "You have been signed up.. please login";
    }else{
        echo "Error in Signup";
    }

?>
