<div class="navbar fixed-top navbar-expand-lg bg-light navbar-light">
    <div class="container">
        <div class="d-flex">
            <a href="" class="navbar-brand">
                <img src="assets/images/edutechlogo.png" class="w-50" alt="">
            </a>
            <form action="" method="get" class="d-flex">
                <div class="input-group">
                    <input type="search" size="60" placeholder="Search Peoples" class="form-control">
                    <button type="submit" class="btn btn-secondary">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="navbar-nav">
            <a href="" class="nav-item nav-link">Home</a>
            <a href="" class="nav-item nav-link fw-bold text-black"><?= $user['firstname'];?></a>
            <a href="logout.php" class="nav-item nav-link">Logout</a>
        </div>
    </div>
</div>