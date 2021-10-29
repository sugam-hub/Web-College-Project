<?php
include('database.php');
session_start();

global $conn;

if(isset($_POST['loginBtn'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $q = " select * from users where name = '$name' and pass = '$pass'";

    $result = mysqli_query($conn, $q);

    $num = mysqli_num_rows($result);

    if($num==1){
        $_SESSION['username'] = $name;
        header('location: ./airports.html');
    }else{
        header('location: ./login.html');
    }
}