<?php
include("./database.php");
session_start();
header('location: ./login.html');
global $conn;

if(isset($_POST["registerBtn"])){
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $q = " select * from users  where name = '$name' && pass = '$pass'";

    $result = mysqli_query($conn, $q);

    $num = mysqli_num_rows($result);

    if($num==1){
        echo "Username already exist!!";
    }else{
        $qy = " insert into users (name, pass) values('$name','$pass')";
        mysqli_query($conn,$qy);
    }
}