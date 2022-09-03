<?php

include_once "./db.php";
$id = $_POST['record_id'];

$query = "DELETE FROM `insert_pract` WHERE id = '$id'";
$query_run = mysqli_query($conn, $query);   

if($query_run){
    echo '<script>alert("data deleted"); </script>';
    header("location: index.php");
}else{
    echo '<script>alert("data is not deleted"); </script>';
}
?>
