<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4-MEN</title>
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://kit.fontawesome.com/cf75b6105c.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <link rel='icon' href='img/xshop2.png' type='image/png'>
</head>
<body>
    <div class="container">
        <header>
            <div class="searchbox">
                <form action="sanpham_search.php" method="GET">
                    <input type="text" name="pro-search" class="in_search" placeholder="Tìm kiếm">
                    <button type="submit" class="btn_search"><span id = "search_icon"class="iconify" data-icon="akar-icons:search" style="color: black; font-size: 20px;"></span></button>
                </form>
            </div>
            
            <?php
            if (isset($_SESSION['user'])) {
            ?>
                <div class="ic-user">
                    <a href="tt_canhan.php">Tài khoản: <?= $_SESSION['user']['ten_kh'] ?></a>
                </div>
            <?php } else { ?>
                <div class="ic-user">
                    <a href="dangnhap.php"><i class="fas fa-user"></i> &nbsp Đăng nhập</a>
                </div>
            <?php } ?>
        </header>
        <nav>
            <div class="logo">
                <a href="index.php">
                    <img src="img/xshop.png" alt="logo">
                </a>
            </div>
            <div class="ahihi">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="gioithieu.php">Giới thiệu</a></li>
                <li><a href="sanpham.php">Sản phẩm</a></li>
                <li><a href="lienhe.php">Liên hệ</a></li>
                <li><a href="gopy.php">Góp ý</a></li>
                <li><a href="cart.php">Giỏ hàng</a></li>
            </ul>
            </div>   
        </nav>

        <!-- header -->