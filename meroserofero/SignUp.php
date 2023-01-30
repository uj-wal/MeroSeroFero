<?php

$con = mysqli_connect('localhost', 'root');
if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'MeroseroferoData');
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$mbl_number = $_POST['mbl_number'];
$password = $_POST['password'];

$query = "insert into userinfo (user_name, email, mbl_number, password) 
values ('$user_name','$email', '$mbl_number', '$password')";
 
echo "$query";
mysqli_query($con, $query);
header('location:LogIn.html');

?>