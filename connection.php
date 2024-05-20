<?php 
    // Connection is being established here
    session_start();

    $username = "root";
    $password = "DbWsbeta";
    $servername = "10.4.1.10";
    $database = "harshal";

    
    $conn = new mysqli($servername, $username, $password, $database);


    // checking of the connection if it is working or not
    if ($conn->connect_error) {
        die("Connection Failed :" . $conn->connect_error);
    } else {
        // echo "Conection Established <br><br><br>";
    }
?>