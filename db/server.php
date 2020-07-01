<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dberp";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 
    /*else {
        echo "<p align='center'><font color=black>Connected DB Successfully</font></p>";
    }*/

?>