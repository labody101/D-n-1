<?php
include 'header.php';
include 'pdo/pdo.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $user = $_POST['username'];
    $sql = "SELECT * from tai_khoan where email = '$email' and user = '$user'";
    $check = pdo_query_one($sql);
    if(is_array($check)){
        $thongbao = "Mật khẩu của bạn là: ".$check['pass'];
    }else{
        $thongbao = "Email hoặc tài khoản không đúng";
    }
}


?>

<div class="row_login">
    <div class="log">
        <h2>Quên mật khẩu</h2>
        <?php if(isset($thongbao)){echo $thongbao;} ?>
    <form action="" method="post">
        <label for="">Email*</label>
        <br>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <label for="">Tên tài khoản*</label>
        <br>
        <input type="text" name="username" placeholder="Tên tài khoản" required>
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