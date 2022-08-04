<?php
include 'header.php';
include 'pdo/pdo.php';
?>

<div class="row-ttcn">
    <div class="anhdd">
        <img src="img_user/<?= $_SESSION['user']['anh_dai_dien'] ?>" width="120" alt="">
    </div>
    <p>Mã: <?= $_SESSION['user']['ma_kh'] ?></p>
    <br>
    <p>Số điện thoại: <?= $_SESSION['user']['sdt'] ?></p>
    <br>
    <p>Email: <?= $_SESSION['user']['email'] ?></p>
    <br>
    <p>Địa chỉ: <?= $_SESSION['user']['diachi'] ?></p>
    <br>
    <a href="capnhat_ttcn.php"><i><b>Cập nhật thông tin cá nhân</b></i></a>
    <br>
    <?php if ($_SESSION['user']['vai_tro'] == 1): ?>
    <a href="admin/admin.php">Quản trị</a>
    <br>
    <?php endif ?>
    <a href="thoat.php">Thoát</a>
</div>


<?php
include 'footer.php';
?>