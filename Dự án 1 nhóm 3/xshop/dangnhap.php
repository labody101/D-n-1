    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dangnhap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<?php
include 'header.php';
include 'pdo/pdo.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $sql = "SELECT * from tai_khoan where user = '$username' and pass = '$pass'";
    $checkuser = pdo_query_one($sql);
    if(is_array($checkuser)){
        $_SESSION['user'] = $checkuser;
        header('location: index.php');
        // $thongbao = "Đăng nhập thành công";
    }else{
        $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký";
    }
    // if($checkuser == null){
    //     $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký";
    // }
    
}


?>
    <?php
    if(isset($thongbao)){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
        <strong>Có lỗi xảy ra!</strong> '.$thongbao.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
<div class="row_login">
    <div class="log">
        <h2>Đăng nhập</h2>
        <br>
        <form action="dangnhap.php" method="post">
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Tên tài khoản" required>
            <label for="floatingInput">Tài khoản</label>
            </div>
            <div class="form-floating">
            <input class="form-control" id="floatingPassword" type="password" name="pass" placeholder="Mật khẩu" required>
            <label for="floatingPassword">Mật khẩu</label>
        </div>
            <input type="submit" value="Đăng nhập"class="btn btn-primary">
            <br>
            Chưa có tài khoản? <a href="Dangky.php" id="login">Đăng ký thành viên</a>
            <br>
            <a href="quenmk.php" id="login">Quên mật khẩu</a>
        </form>
    </div>
</div>


<?php
include 'footer.php';
?>