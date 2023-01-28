<?php
include_once('../connect.php');
// create a new category
$category = $_POST['category'];
$name = $_POST['name'];
$size = $_POST['size'];
$color = $_POST['color'];
//gender
$group = $_POST['group'];
$price = $_POST['price'];
$tags = $_POST['tags'];
$details = $_POST['details'];

$image = $_FILES['image'];
$fileName = $_FILES['image']['name'];
$fileTempName = $_FILES['image']['tmp_name'];

// move file 
$uploads_dir ="./uploads";
// chmod($uploads_dir, 0777);
if(move_uploaded_file($uploads_dir,$fileTempName)){
    echo 'moved';
}
else{
    echo 'failed';
}

$sql = "INSERT into products values('', '$category', '$name', '$size', '$color', '', '$group', '$price', '$tags', '$details', '$fileName', 1 )";

$ins = mysqli_query($con, $sql);

if(!$ins){
    echo "error";
}
else{
    echo 'done';
}
?>