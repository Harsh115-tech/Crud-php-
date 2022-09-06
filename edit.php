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
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <style>
        *{
            color: gray;
            font-weight: bold;
            font-family: cursive;
            letter-spacing: 0.6px;
        }
        .update_cont{
            width:500px;
        }
        .update_form{
            height:309px !important;
            width:400px;
        }
        @media screen and (max-width:505px) {
            .update_cont{
                width:auto;
            }
        }
        @media screen and (max-width:410px){
            .update_form{
               width:100%;
            }
            .update_cont{
                width:auto;
            }
        }
     </style>
</head>
<body>
    <div>
        <h1 class="text-white bg-dark text-center border-bottom border-5 p-2"> <span class="me-2 fw-bold text-black bg-white rounded d-inline-flex align-items-center">¬_¬</span>Crud Operation (PHP)</h1>
    </div>
    <div class="container">
        <div class="card bg-dark p-4 rounded update_cont mx-auto">
            <div class="card-body">
                <form class="my-3 rounded border-white box-shadow mx-auto update_form" method="POST" action="update.php">
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
        </div>
    </div>
</body>
</html>
