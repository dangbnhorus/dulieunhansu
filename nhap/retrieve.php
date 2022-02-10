<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
    <title> Retrive data</title>
</head>
<body>
<table>
    <tr>
        <td>STT</td>
        <td>Họ và tên</td>
        <td>Email</td>
        <td>Số điện thoại</td>
        <td>Ngày sinh</td>
        <td>Địa chỉ</td>
        <td>Bộ phận</td>
        <td>Chức danh</td>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        if($i%2==0)
            $classname="even";
        else
            $classname="odd";
        ?>
        <tr class="<?php if(isset($classname)) echo $classname;?>">
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["fullname"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["ngaysinh"]; ?></td>
            <td><?php echo $row["diachi"]; ?></td>
            <td><?php echo $row["bophan"]; ?></td>
            <td><?php echo $row["chucdanh"]; ?></td>
        </tr>
        <?php
        $i++;
    }
    ?>
</table>
</body>
</html>