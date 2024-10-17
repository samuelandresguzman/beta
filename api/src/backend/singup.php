<?php

//DB connection
require('../../config/db_connection.php');

//get data from register form
$email = $_POST['email_name'];
$password = $_POST['password_name'];
//Encrypt password
$enc_password =md5($password);

//validate if email already exists
$query = "SELECT * FROM users WHERE email = '$email'";
$result = pg_query($conn, $query);
$row = pg_fetch_assoc($result);
if ($row) {
    echo "<script>alert('Email already exists!')</script>";
    header('refresh:0;url=http://127.0.0.1/beta/api/src/register_form.html');
    exit();
}

//query to insert data into user table
$query = "INSERT INTO users (email,password) 
VALUES('$email','$enc_password')";

// execute the query
$result = pg_query($conn, $query);

if($result) {
    //echo "Registration susccesful!";
    echo"<script>alert('Registration susccesful!')</script>";
    header('refresh:0;url=http://127.0.0.1/beta/api/src/login_form.html');
} else {
    echo "Registration failed!";
}

pg_close($conn);



//echo "Email: " . $email;
//echo"<br>Password: " . $password;
//echo"<br> Enc. Password: " . $enc_password;


?>