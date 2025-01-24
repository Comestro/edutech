<?php 

$connect = new mysqli("localhost","root","","edunet");

if($connect->connect_error){
    die("db connection failed" . $connect->connect_error);
}


// insert to database 

?>