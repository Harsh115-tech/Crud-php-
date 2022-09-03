<?php 
                    
    include_once 'db.php';
    // getting id for update the single record
    $_id = $_GET['id'];
    $query = "SELECT * FROM `insert_pract` WHERE id = $_id";
    $fetch_data = mysqli_query($conn,$query);
    $res = $fetch_data -> fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class="w-75 w-md-50 my-3 rounded border-white box-shadow mx-auto" method="POST" action="update.php">
            <input type="hidden" name="id" value="<?= $_id ?>">
            <div class="mb-3"> 
                <label for="fname" class="form-label text-light">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" required value="<?= $res['fname'] ?>">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label text-white">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" required value="<?= $res['lname'] ?>">
            </div>
            <div class="mb-3">
                <label for="stream" class="form-label text-white">Stream</label>
                <input type="text" class="form-control" id="stream" name="stream" required value="<?= $res['stream'] ?>">
            </div>
            <button type="submit" class="btn btn-outline-light float-end" id="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>