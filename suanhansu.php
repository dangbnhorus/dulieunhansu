<?php include_once 'ketnoidulieu.php';?>
<?php
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE users set id='" . $_POST['id'] . "',fullname='" . $_POST['fullname'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', ngaysinh='" . $_POST['ngaysinh'] ."', diachi='" . $_POST['diachi'] ."', bophan='" . $_POST['bophan'] ."', chucdanh='" . $_POST['chucdanh'] . "' WHERE id='" . $_POST['id'] . "'");
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
    <body class="sb-nav-fixed">
                        <div class="card mb-4">
                        <div class="card-header">
                                <div class="row justify-content-center">
                                    <div class="col-lg-5">
                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                            <div class="card-header"><h2 class="text-center font-weight-light my-4">Nhập thông tin</h2></div>
                                                <div class="card-body">
                                                <form name="frmUser" method="post" action="">
                                                <div class="form-floating mb-3">
                                                     <input class="form-control" id="" type="text" name="mnv" value="<?php echo $row['mnv']; ?>"/>
                                                     <label for="mnv">Mã nhân viên:</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                <input class="form-control" id="" type="text" name="fullname" value="<?php echo $row['fullname']; ?>"/>
                                                <label for="fullname">Họ và tên:</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                     <input class="form-control" id="" type="email" name="email" value="<?php echo $row['email']; ?>"/>
                                                     <label for="email">Email:</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                <input class="form-control" id="" type="phone" name="phone" value="<?php echo $row['phone']; ?>"/>
                                                <label for="phone">Số điện thoại:</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                <input class="form-control" id="" type="diachi" name="diachi" value="<?php echo $row['diachi']; ?>"/>
                                                <label for="diachi">Địa chỉ:</label>
                                                </div>
                                                <div class="form-floating mb-3" >
                                                    <p>Ngày sinh:
                                                    <input type="date" id="" name="ngaysinh" style="width: 171px; height: 40px;" value="<?php echo $row['ngaysinh']; ?>"/>
                                                    &ensp;
                                                <select style="width: 171px;height: 40px;" type="text" name="bophan" >
                                                    <option ><?php echo $row['bophan']; ?></option>
                                                    <option value="Dev">Dev</option>
                                                    <option value="Game Design">Game design</option>
                                                    <option value="Art">Art</option>
                                                    <option value="Tester">Tester</option>
                                                </select>
                                                    &ensp; 
                                                <select style="width: 171px;height: 40px;" type="text" name="chucdanh">
                                                    <option id="chucdanh" ><?php echo $row['chucdanh']; ?></option>
                                                    <option value="Nhân viên">Nhân viên</option>
                                                    <option value="Leader">Leader</option>
                                                    <option value="Quản lý">Quản lý</option>
                                                    <option value="Giám đốc">Giám đốc</option>
                                                </select>
                                                </p>
                                                </div>
                                                <br/>
                                                <center>
                                                    <button type="submit" name="submit" class="button" style="width: 100px; height: 35px; background-color: #0B5ED7; color: white; border: 0px; border-radius: 3px; "> Lưu </button>
                                                </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
