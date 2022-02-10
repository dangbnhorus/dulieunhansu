
<?php
require_once ('ketnoidulieu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Nhân sự</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php" id="hd">HORUSENT DAILY</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-light" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="caidat.php">Cài đặt</a></li>
                <li><a class="dropdown-item" href="lichsu.php">Lịch sử</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><center><a class="btn-outline-danger" href="login.php">Đăng xuất</a></center></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <!--<div class="sb-sidenav-menu-heading">Core</div>-->
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Trang chủ
                    </a>
                    <a class="nav-link" href="nhansu.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Nhân sự
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Giao việc
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="vieccuatoi.php">Việc của tôi</a>
                            <a class="nav-link" href="duan.php">Dự án</a>
                        </nav>
                    </div>
                    </a>
                    <a class="nav-link" href="yeucaucanduyet.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Yêu cầu
                    </a>
                    <a class="nav-link" href="baocao.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Báo cáo
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Nhân sự</h1>
                <a href="themnhanvien.php" style="float: right;">Thêm nhân viên</a>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Nhân sự</li>
                </ol>
                <table border="1" width="100%">
                    <thead>
                    <tr style="text-align: center; ">
                        <th width="50px">STT</th>
                        <th width="150px">Mã nhân viên</th>
                        <th width="250px">Họ và tên</th>
                        <th width="250px">Email</th>
                        <th width="200px">Số điện thoại</th>
                        <th width="200px">Ngày sinh</th>
                        <th width="400px">Địa chỉ</th>
                        <th width="200px">Bộ phận</th>
                        <th width="200px">Chức danh</th>
                        <th width="100px"> Chỉnh sửa</th>
                        <th width="60px"></th>
                        <th width="60px"></th>
                    </thead>
                    <tbody>
                    </tr>
<?php
if (isset($_GET['id']) && $_GET['id'] != '') {
	$sql = 'select * from user where id like "%'.$_GET['id'].'%"';
} else {
	$sql = 'select * from wh';
}

$whList = executeResult($sql);

$index = 1;
foreach ($whList as $std) {
                   echo
                        '<tr class="<?php if(isset($classname)) echo $classname;?>">
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["mnv"]; ?></td>
                            <td><?php echo $row["fullname"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["ngaysinh"]; ?></td>
                            <td><?php echo $row["diachi"]; ?></td>
                            <td><?php echo $row["bophan"]; ?></td>
                            <td><?php echo $row["chucdanh"]; ?></td>
                            <td><button class="btn btn-warning" onclick=\'window.open("sua.php?id='.$std['id'].'","_self")\'>Edit</button></td>
			                <td><button class="btn btn-danger" onclick="deleteStudent('.$std['id'].')">Delete</button></td>
                        </tr>';
    }
?>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="window.open('sua.php', '_self')">Add Student</button>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>
