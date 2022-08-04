<?php
include 'header.php';
include 'pdo/pdo.php';

$idupdate = $_SESSION['user']['ma_kh'];
$sql = "SELECT * FROM tai_khoan where ma_kh = $idupdate";
$tt = pdo_query_one($sql);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['ma_kh'];
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $anh = $_POST['anhdd'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];

    if($_FILES['anhdd']['size']>0){
        $anh = $_FILES['anhdd']['name'];
    }

    $sql = "UPDATE tai_khoan SET user = '$user', pass = '$pass', anh_dai_dien = '$anh', email = '$email', diachi = '$diachi', sdt = '$sdt' where ma_kh = $id";
    pdo_execute($sql);
    $sql = "SELECT * from tai_khoan where ma_kh = $id";
    $tt_sau_update = pdo_query_one($sql);
    $_SESSION['user'] = $tt_sau_update;

    if ($_FILES['anhdd']['size'] > 0) {
        move_uploaded_file($_FILES['anhdd']['tmp_name'], 'img_user/' . $anh);
    }
    header('location: tt_canhan.php?message=Cập nhật thành công');
    die;
}


?>

<div class="row">
    <form action="capnhat_ttcn.php?ma_kh=<?=$tt['ma_kh']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="ma_kh" value="<?=$tt['ma_kh']?>">
        <label for="">Tên tài khoản*</label>
        <br>
        <input type="text" name="username" value="<?=$tt['user']?>" placeholder="Tên tài khoản" required>
        <br>
        <label for="">Mật khẩu*</label>
        <br>
        <input type="password" name="pass" value="<?=$t['pass']?>" placeholder="Mật khẩu" required>
        <br>
        <label for="">Ảnh đại diện</label>
        <br>
        <input type="hidden" name="anhdd" value="<?=$tt['anh_dai_dien']?>">
        <input type="file" name="anhdd" ><br>
        <img src="img_user/<?=$tt['anh_dai_dien']?>" width="150" alt="">
        <br>
        <label for="">Địa chỉ</label>
        <br>
        <input type="text" name="diachi" value="<?=$tt['diachi']?>" placeholder="Địa chỉ">
        <br>
        <label for="">Số điện thoại</label>
        <br>
        <input type="text" name="sdt" value="<?=$tt['sdt']?>" placeholder="Số điện thoại">
        <br>
        <label for="">Email*</label>
        <br>
        <input type="email" name="email" value="<?=$tt['email']?>" placeholder="Email">
        <br>
        <input type="submit" name="update_ttcn" value="Cập nhật">
        <br>
        <input type="reset" value="Nhập lại">
    </form>
</div>


<?php
include 'footer.php';
?>