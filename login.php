<?php
include_once('connect.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from users where email='$email' and password='$password' ";
$check = mysqli_query($con, $sql);

if(mysqli_num_rows($check) == 1){
    header('location: dashboard/index.html');
}
else{
    // return error msg to the user (validation)
    header('location: login.html');
}


?>