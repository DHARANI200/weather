<?php

session_start();

$con = mysqli_connect('localhost','root','');
if($con){
    echo "connection sucessful";
}else{
    echo "no connection";
}

mysqli_select_db($con,'news');

$name = $_POST['user'];
$pass = $_POST['password'];


$q = " select * from signup where username = '$name' && password = '$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:index.php');
    
}else{
    $_SESSION['status'] = "please register";
   header('location:login.php');
   
}

?>