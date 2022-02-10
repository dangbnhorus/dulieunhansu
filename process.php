<?php
include_once 'ketnoidulieu.php';
if(isset($_POST['btn-save']))
{
// variables for input data

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $bophan = $_POST['bophan'];
    $chucdanh = $_POST['chucdanh'];
// sql query for inserting data into database

    mysqli_query($conn,"insert into users(fullname,email,phone,ngaysinh,diachi,bophan,chucdanh) values ('$fullname','$email','$phone','$ngaysinh','$diachi','$bophan','$chucdanh')") or die(mysqli_error());
    header('location:nhansu.php');
}
?>
