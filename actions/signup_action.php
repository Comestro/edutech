<?php 
include "../config/connect.php";

if(isset($_POST['create_account'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);


    $query = $connect->prepare("insert into users (firstname, lastname, d_dob, m_dob, y_dob, gender, email, contact, password) value(?,?,?,?,?,?,?,?,?)");

    $query->bind_param("sssssssss",$firstname,$lastname, $day, $month, $year, $gender, $email, $contact, $password);


    if($query->execute()){
        redirect("../login.php");
    }
    else{
        message("something went wrong");
    }
}
?>