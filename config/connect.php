<?php 

$connect = new mysqli("localhost","root","","edunet");

session_start();


if($connect->connect_error){
    die("db connection failed" . $connect->connect_error);
}


// insert to database 


function redirect($page){
    echo "<script>window.open('$page','_self')</script>";
}

function message($msg){
    echo "<script>alert('$msg')</script>";
}


function redirectIfNotAuth(){
    if(!isset($_SESSION['user'])){
        redirect("login.php");
    }
}

function getUser(): array{
    $email = $_SESSION['user'];
    global $connect;
    $query = $connect->query("select * from users where email='$email'");
    $userdata = $query->fetch_assoc();

    return $userdata;

}

?>