<!DOCTYPE html>
<html>
<head>
<title>Insert data in mysql data base</title>
</head>
<body>
<center>
<h1>Insert Employee Data</h1>
<form method="post" action="process.php">
<table align="center">
<tr>
<td align="center"></td>
</tr>
<tr>
    <td>Họ và tên<input type="text" name="fullname" required /></td>
</tr>
<tr>
    <td>Email<input type="text" name="email" required /></td>
</tr>
<tr>
    <td>Số điện thoại<input type="text" name="phone" required /></td>
</tr>
<tr>
    <td>Ngày sinh<input type="text" name="ngaysinh" required /></td>
</tr>
<tr>
    <td>Địa chỉ<input type="text" name="diachi" required /></td>
</tr>
<tr>
    <td>Bộ phận<input type="text" name="bophan" required /></td>
</tr>
<tr>
    <td>Chức danh<input type="text" name="chucdanh" required /></td>
</tr>
<td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
</tr>
</table>
</form>
</center>
</body>
</html> 