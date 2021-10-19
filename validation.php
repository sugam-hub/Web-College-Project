<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'userregistration');

$username = $_POST['username'];
$password = $_POST['password'];

$s = " select * from  usertable where username = '$username' && password= '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    header('location: Dashboard.html');
}
else{
   header('location: login.html');
}



?>