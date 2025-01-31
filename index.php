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
            <div class="col-5 d-flex flex-column gap-4  pt-5">
                <!-- insert post form -->
                <div class="card mt-2">
                    <div class="card-body">
                        <form action="actions/insert_post.php" method="post" enctype="multipart/form-data">
                            <textarea name="content" rows="7" class="w-100 border-0" id="" placeholder="What's in your mind?"></textarea>
                            <div class="d-flex justify-content-between mt-2">
                                <input type="file" name="image">
                                <input type="submit" class="btn btn-success btn-sm" name="send_post" value="Post Now">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end post form -->

                <!-- calling post work -->

                <?php
                $callingPost = $connect->query("select * from posts JOIN users ON posts.user_id = users.id ORDER BY post_id DESC");
                while ($post = $callingPost->fetch_array()):
                ?>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex gap-2">
                                <div class="d-flex">
                                    <img src="assets/images/dp/<?= $post['dp'] ?? "default.png" ?>" width="50px" height="50px" class="rounded-circle overflow-hidden object-fit-cover" alt="">
                                </div>
                                <div class="d-flex flex-column gap-0">
                                    <a href="profile.php?profile_id=<?= $post['id'];?>" class="nav-link m-0 p-0 fw-medium text-capitalize"><?= $post['firstname']; ?> <?= $post['lastname']; ?></a>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" style="width: 12px;fill:orange">
                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8Zm7.75-4.25a.75.75 0 0 0-1.5 0V8c0 .414.336.75.75.75h3.25a.75.75 0 0 0 0-1.5h-2.5v-3.5Z" clip-rule="evenodd" />
                                        </svg>

                                        <span class="small"><?= date("h:i A D M Y", strtotime($post['date_of_post'])); ?></span>

                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                            if ($post['content'] != "" || $post['content'] != NULL):
                                echo "<p>" . $post['content'] . "</p>";
                            endif;


                            if ($post['image'] != "" || $post['image'] != NULL):
                                echo "<img src='assets/post_image/" . $post['image'] . "' class='w-100'/>";
                            endif;
                            ?>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <span class="d-flex gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 20px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                                <span>Like</span>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 20px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                </svg>

                                <span>Comment</span>
                            </span>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
            <div class="col-3  pt-5">ads</div>
            <div class="col-2  pt-5 bg-light" style="height:95vh">

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>