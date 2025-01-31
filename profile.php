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
    <?php include_once "includes/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <?php


                if (isset($_GET['profile_id'])) {
                    $profile_id = $_GET['profile_id'];

                    $user = getUser($profile_id);
                }

                if ($user['cover_image'] == NULL):
                    echo "<div class='cover'></div>";
                else:
                    $cover_image = "assets/images/cover/" . $user['cover_image'];
                    echo "<div class='cover' style='background-image:url(" . $cover_image . "); background-size:cover;background-position:center'></div>";
                endif;
                ?>
                <div class="d-flex px-5 profile-card align-items-center justify-content-between gap-4">
                    <span class="d-flex  align-items-center gap-4">
                        <div class="card dp-card  rounded-circle">

                            <?php
                            if (!isset($_GET['profile_id'])): ?>
                                <form action="actions/upload_dp.php" method="post" enctype="multipart/form-data">
                                    <label for="upload_dp">
                                        <input type="file" onchange="this.form.submit()" name="dp_image" id="upload_dp" hidden>
                                        <img src="<?= ($user['dp']) ? "assets/images/dp/" . $user['dp'] : "assets/images//dp/default.png"; ?>" alt="" class="card-img-top rounded-circle">
                                    </label>
                                    <input type="submit" hidden>
                                </form>
                            <?php else: ?>
                                <img src="<?= ($user['dp']) ? "assets/images/dp/" . $user['dp'] : "assets/images//dp/default.png"; ?>" alt="" class="card-img-top rounded-circle">
                            <?php endif; ?>
                        </div>
                        <h2 class="text-white text-capitalize h3 profile-title"><?= $user['firstname'] . " " . $user['lastname']; ?></h2>
                    </span>

                    <?php if (!isset($_GET['profile_id'])): ?>

                        <form action="actions/upload_cover.php" method="post" enctype="multipart/form-data">
                            <label for="upload_cover" class="btn btn-dark">
                                <input type="file" onchange="this.form.submit()" id="upload_cover" name="cover_image" hidden>
                                Upload Cover
                            </label>

                            <input type="submit" hidden>
                        </form>

                    <?php endif; ?>

                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-2  pt-5 bg-light" style="height:95vh">

            </div>
        </div>
    </div>


</body>

</html>