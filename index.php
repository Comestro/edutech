<?php 
    include "config/connect.php";

    redirectIfNotAuth();

    $user = getUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include_once "includes/header.php";?>


    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-2 h-full bg-light  pt-5" style="height:95vh">
                <div class="nav d-flex flex-column">
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                    <a href="" class="nav-link nav-item text-black">View Rohit Profile</a>
                </div>
            </div>
            <div class="col-5  pt-5">
                <div class="card mt-2">
                    <div class="card-body">
                        <form action="" method="post">
                            <textarea name="" rows="7" class="w-100 border-0" id="" placeholder="What's in your mind?"></textarea>
                            <div class="d-flex justify-content-between mt-2">
                                <input type="file" name="">
                                <input type="submit" class="btn btn-success btn-sm" value="Post Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3  pt-5">ads</div>
            <div class="col-2  pt-5 bg-light" style="height:95vh">

            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>