<?php 

    include_once 'db.php';


    $fname  = $_POST['fname'];
    $lname   = $_POST['lname'];
    $stream  = $_POST['stream'];
    $_id = $_POST['id'];
    
    $query = "UPDATE `insert_pract` SET fname='$fname',lname='$lname',stream='$stream' WHERE id = '$_id'";
    $res = mysqli_query($conn,$query);
    print_r($res);
    header('location: ' . 'index.php');

?>