    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dangnhap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
        * {
            margin:0;
        }
    </style>
<?php
include 'pdo/pdo.php';
include 'header.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $anhdd = 'noimage.jpg';
    if (trim($name) == '' || trim($username) == '' || trim($password) == '' || trim($email) == '') {
        $thongbao_loi = 'Vui lòng nhập đầy đủ thông tin';
    }
     else {
        $sql = "INSERT into tai_khoan(user,pass,email,anh_dai_dien,ten_kh) values ('$username','$password','$email','$anhdd','$name')";
        pdo_execute($sql);
        $thongbao = "Đăng ký thành công!";
        
    }

    
}


?>

<div class="rowtk">

    <h2>Đăng ký</h2>
    <br>
    <form action="" method="post">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
        <?php if(isset($thongbao)){ echo '
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <div style="margin-left:0">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                '.$thongbao.'
            </div>
        </div>';} 
        ?>
        <?php
        if (isset($thongbao_loi)) {
            echo'
            <div class="alert alert-primary d-flex align-items-center" role="alert">
            <div style="margin-left:0">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                '.$thongbao_loi.'
            </div>
            </div>
            ';
        }
        ?>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Họ và tên" required name="name">
            <label for="floatingInput">Họ và tên</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPassword" name="username" placeholder="Tài khoản" required>
            <label for="floatingPassword">Tài khoản</label>
        </div>
        <div class="form-floating">
            <input class="form-control" id="floatingPassword" type="password" name="password" placeholder="Mật khẩu" required>
            <label for="floatingPassword">Mật khẩu</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email</label>
        </div>
        <input type="submit" value="Đăng ký"class="btn btn-primary" name="dangky">
        <input class="btn btn-primary" type="reset" value="Nhập lại">
        <a href="dangnhap.php">Quay lại đăng nhập</a>
    </form>

</div>


<?php
include 'footer.php';
?>