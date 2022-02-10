<?php
include_once('ketnoidulieu.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
    $id=$_GET['id'];
    $sql = "DELETE FROM users WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header('location:nhansu.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
?>