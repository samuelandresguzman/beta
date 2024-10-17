<?php
    /*
    Data Base connection
    DeverLaper: Chapi
    */
    $host = "localhost"; //127.0.0.1
    $username = "postgres";
    $password = "unicesmag";
    $dbname = "beta";
    $port = "5432";

    $data_connections = "
    host =$host
    port =$port
    dbname =$dbname
    user =$username
    password =$password
    ";
    
    // Create connection
    $conn = pg_connect($data_connections);
    
    if (!$conn) {
        die("connection failed: ". pg_last_error());
    } else {
        //echo "connection succesfully";
    }
    // Check connection
    
    //pg_close($conn);
?>