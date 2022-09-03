<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "practice_db";
    // $conn = new mysqli($servername,$username,$password,$db);
    $conn = mysqli_connect($servername,$username,$password,$db);
    if(!$conn ){
        die("Connection failed : " . mysqli_connect_error());
    }
?>
