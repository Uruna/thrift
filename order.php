<?php session_start(); ?>
<?php include_once('connect.php'); ?>
<?php
    $product_id = $_GET['id'];

    $sql = "INSERT into orders(user_id, product_id) values('1', '$product_id') ";
    $insert = mysqli_query($con, $sql);

    if(!$insert){
        echo 'error'.mysqli_error($con);
    }
    else{
        $order_id =  mysqli_insert_id($con);
        $_SESSION['order_id'] = $order_id;

        header('location: checkout.php');
    }
?>