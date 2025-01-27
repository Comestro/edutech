<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account Page | eduNet.com </title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container wrapper flex-column justify-content-center d-flex align-items-center ">
        <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center">
                <img src="assets/images/logo_large.png" width="80%" alt="">
                <p class="fw-medium h4 w-75">EduNet is Educational Network helps you connect and share with the Students & teacher.</p>
            </div>
            <div class="col-lg-5">
                <div class="bg-white card rounded">
                    <div class="card-body px-5 py-3">
                        <h2 class="text-theme h5 text-capitalize">Create 100% free Account</h2>
                        <hr/>
                        <form action="actions/signup_action.php" method="post">
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" class="small text-muted">First Name</label>
                                    <input type="text" name="firstname" placeholder="e.g Anil" class="form-control rounded-0">
                                </div>
                                <div class="mb-3 col">
                                    <label for="" class="small text-muted">Last Name</label>
                                    <input type="text" name="lastname" placeholder="e.g Kumar" class="form-control rounded-0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" class="small text-muted">Day</label>
                                    <select name="day" id="" class="form-select rounded-0">
                                        <option value="">Select Day</option>
                                        <?php 
                                            for($day = 1; $day <= 31; $day++){
                                                echo "<option value='$day'>$day</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3 col">
                                    <label for="" class="small text-muted">month</label>
                                    <select name="month" id="" class="form-select rounded-0">
                                        <option value="">Month</option>
                                        <?php 
                                        $months = ["Jan","Feb","March", "April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
                                            foreach($months as $month){
                                                echo "<option value='$month'>$month</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3 col">
                                    <label for="" class="small text-muted">Year</label>
                                    <select name="year" id="" class="form-select rounded-0">
                                        <option value="">year</option>
                                        <?php 
                                            $current = date("Y");
                                            for($year=$current - 50; $year <= $current + 50; $year++){
                                                echo "<option value='$year'>$year</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" class="small text-muted">Gender</label>
                                    <select name="gender" id="" class="form-select rounded-0">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">female</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 col">
                                    <label for="" class="small text-muted">Contact/Phone</label>
                                    <input type="number" name="contact" placeholder="e.g 9999999999" class="form-control rounded-0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" class="small text-muted">Email</label>
                                    <input type="email" name="email" placeholder="e.g anil@mail.com" class="form-control rounded-0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" class="small text-muted">Password</label>
                                    <input type="password" name="password" placeholder="e.g write stronge Password" class="form-control rounded-0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col px-5">
                                    <input type="submit" name="create_account"  value="Create an Account" class="btn btn-theme rounded-lg btn-lg w-100">
                                </div>
                            </div>

                            <hr/>
                            <div class="d-flex justify-content-center">
                                <a href="login.php" class="small">Already have an Account?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php");?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>