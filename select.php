<?php
    include_once './db.php';
    $selectAll = "SELECT * FROM `insert_pract`";
    $no_of_rows = mysqli_query($conn, $selectAll);
    $res = $no_of_rows -> fetch_all(MYSQLI_ASSOC);
    
?>