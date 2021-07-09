<?php

session_start();
header('location: register.php');

$con = mysqli_connect('localhost','root','');
if($con){
    echo "connection sucessful";
}else{
    echo "no connection";
}

mysqli_select_db($con,'news');

$name = $_POST['name'];
$email = $_POST['email'];
$uname = $_POST['user'];
$pass = $_POST['password'];


$q = " select * from signup where name = '$name' && email = '$email' && username = '$uname' && password = '$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num > 0){
   $_SESSION['Error'] = "already registered";
}else{
    $_SESSION['statu'] = "signed up";
    $qy = " insert into signup(name , email , username , password) values('$name' , '$email' , '$uname' , '$pass') ";
    mysqli_query($con, $qy);
}

?>