<?php
session_start();

if(!isset($_SESSION['user'])&&$_SESSION['user']['vai_tro'] <> 1){
    echo "Bạn không phải admin";
    header('location: ../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="../index.php">
                    <img src="../img/xshop.png" alt="logo">
                </a>
            </div>
            <h1>Quản trị</h1>
        </header>
        <nav>
            <ul>
                <li><a href="admin.php">Trang chủ</a></li>
                <li><a href="danhmuc.php">Danh mục</a></li>
                <li><a href="add_sp.php">Hàng hóa</a></li>
                <li><a href="danhsach_taikhoan.php">Khách hàng</a></li>
                <li><a href="ds_sp_binhluan.php">Bình luận</a></li>
                <li><a href="ql_donhang.php">Quản lí đơn hàng</a></li>
                <li><a href="thongke.php">Thống kê</a></li>
                <li><a href="ql_chi_nhanh.php">Quản lí chi nhánh</a></li>
                <li><a href="../index.php">Trở về Website</a></li>
            </ul>
        </nav>