<?php
include 'header.php';
include 'pdo/pdo.php';




?>

<div class="row_login">
    <div class="log">
        <h2>Quên mật khẩu</h2>
        <?php if(isset($thongbao)){echo $thongbao;} ?>
    <form action="xu_li_quen_mk.php" method="post">
        <label for="">Email*</label>
        <br>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <input type="submit" value="Gửi">
        <br>
        <a href="dangnhap.php">Về đăng nhập</a>
    </form>
    </div>
</div>

<?php
include 'footer.php';
?>