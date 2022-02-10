<?php include_once 'database.php';
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE users set id='" . $_POST['id'] . "', fullname='" . $_POST['fullname'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', ngaysinh='" . $_POST['ngaysinh'] ."', diachi='" . $_POST['diachi'] ."', bophan='" . $_POST['bophan'] ."', chucdanh='" . $_POST['chucdanh'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
}
    $result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Thay đổi thông tin nhân sự</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
<form name="" method="post" action="">
<div style="">
<div class="message">
    <?php
    if(isset($message))
    {
        echo $message;
    }
    ?>
</div>
    <div align="right" style="text-align: center">
        <a href="nhansu.php" class="link">Danh sách nhân sự</a>
    </div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>Họ và tên</label></td>
<td><input type="text" name="fullname" class="txtField" value="<?php echo $row['fullname']; ?>"></td>
</tr>
<td><label>Email</label></td>
<td><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
<tr>
<td><label>Số điện thoại</label></td>
<td><input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>"></td>
</tr>
<tr>
<td><label>Ngày sinh</label></td>
<td><input type="text" name="ngaysinh" class="txtField" value="<?php echo $row['ngaysinh']; ?>"></td>
</tr>
    <tr>
        <td><label>Địa chỉ</label></td>
        <td><input type="text" name="diachi" class="txtField" value="<?php echo $row['diachi']; ?>"></td>
    </tr>
    <tr>
        <td><label>Bộ phận</label></td>
        <td><input type="text" name="bophan" class="txtField" value="<?php echo $row['bophan']; ?>"></td>
    </tr>
    <tr>
        <td><label>Chức danh</label></td>
        <td><input type="text" name="chucdanh" class="txtField" value="<?php echo $row['chucdanh']; ?>"></td>
    </tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="buttom"></td>
</tr>
</table>
</div>
</form>
</body>
</html> 