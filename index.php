<?php 
include_once './db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname    = $_POST['fname'];
    $lname   = $_POST['lname'];
    $stream  = $_POST['stream'];
    
    // insert query
    $insert = "INSERT INTO `insert_pract` (`fname`, `lname`, `stream`) VALUES ('$fname', '$lname', '$stream')";
    // run query
    $result = mysqli_query($conn, $insert);
    // check if inserted or not 
    if($result){
        echo "<script>alert('data inserted successfully');</script>";
        header('location: ' . $_SERVER['PHP_SELF']);
    }else{
        echo "the record was not inserted successfully because of this error ----> " . mysqli_error($conn);
    }
    
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax crud</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        *{
            color: gray;
            font-weight: bold;
            font-family: cursive;
            letter-spacing: 0.6px;
        }
        .form-control:focus{
            box-shadow:none;
        }
        #deletebtn:active{
            box-shadow: inset -1px 0px 15px white;
        }
        .btn:focus{
            box-shadow:none !important;
        }
        .head_color{
            color:black;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-dark">
            <h1 class="text-white d-inline bg-dark text-center border-bottom border-5 p-2"> <span class="me-2 fw-bold text-black bg-white rounded d-inline-flex align-items-center">¬_¬</span>Crud Operation (PHP)</h1>
            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center">
                <form class="w-75 my-3 rounded border-white box-shadow add_user_form" method="POST" action="index.php">
                    <h3 class="text-white text-center capitalize text-decoration-underline">Add User</h3>
                    <div class="mb-3">
                        <label for="fname" class="form-label text-light">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" required>
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label text-white">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" required>
                    </div>
                    <div class="mb-3">
                        <label for="stream" class="form-label text-white">Stream</label>
                        <input type="text" class="form-control" id="stream" name="stream" required>
                    </div>
                    <button type="submit" class="btn btn-outline-light float-end" id="submit" name="submit">Submit</button>
                </form>
            </div>
            <div class="col-12 col-md-7 text-white">
                <div class="mb-4">
                    <h3 class="text-white text-center capitalize text-decoration-underline ">Datatable Data</h3>
                </div>
                <div class="table-responsive-md rounded">
                    <table class="table table-primary">
                        <thead>
                            <tr class="text-center text-dark pb-2">
                                <th scope="col" class="head_color">Id</th>
                                <th scope="col" class="head_color">First Name</th>
                                <th scope="col" class="head_color">Last Name</th>
                                <th scope="col" class="head_color">Stream</th>
                                <th scope="col" class="head_color">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- php start -->
                        <?php
                            
                            include_once './select.php';
                            // echo "$res"
                            foreach ($res as $obj) {
                        ?>
                        <tr class="text-center">
                            <td><?= $obj['id'] ?></td>
                            <td><?= $obj['fname'] ?></td>
                            <td><?= $obj['lname'] ?></td>
                            <td><?= $obj['stream'] ?></td>
                        
                            
                            <td class="d-flex justify-content-center flex-column flex-md-row">
                                <a href="edit.php?id=<?php echo $obj['id']; ?>" class="btn btn-outline-success me-0 me-md-1 mb-1 md-md-0">Update</a>
                                <form action="./delete.php" method="POST">
                                    <input type="hidden" name="record_id" id="record_id" value="<?= $obj['id'] ?>">
                                    <button type="submit" class="btn btn-outline-danger me-0 me-md-1 mb-1 md-md-0" id="deletebtn" name="deletebtn">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        <!-- php close -->
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <script src="index.js"></script>
</body>
</html>
