<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<?php
include 'header.php';
include 'pdo/pdo.php';

if (isset($_SESSION['user'])) {
    $id = $_SESSION['user']['ma_kh'];
    $name = $_SESSION['user']['ten_kh'];
    $diachi = $_SESSION['user']['diachi'];
    $email = $_SESSION['user']['email'];
    $sdt = $_SESSION['user']['sdt'];
} else {
    $id = "";
    $name = "";
    $diachi = "";
    $email = "";
    $sdt = "";
}

function tongdon(){
    $tong = 0;
    foreach ($_SESSION['mycart'] as $sp_add){
        $ttien = $sp_add[3] * $sp_add[4];
        $tong += $ttien; 
    }
    return $tong; 
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['ma_kh'];
    else $iduser = 0;
    $name = $_POST['name'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $time = Date("H:i:s d/m/Y");
    $pttt = $_POST['pttt'];
    $dcgh = $_POST['dcgh'];
    $tongdon = tongdon();
    if ($pttt === "loi" ) {
        echo '<script>alert("Vui lòng chọn phương thức thanh toán");</script>';
        echo '<script>window.location.href="bill.php";</script>';
        exit;
    }else{
        $sql = "INSERT into bill(bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngay_dat_hang,total,id_user,reveive_address) values ('$name','$email','$diachi','$sdt','$pttt','$time','$tongdon','$iduser','$dcgh')";
        $id_bill = pdo_execute_lastinsertID($sql);
        foreach ($_SESSION['mycart'] as $cart) {
        $idkh = $_SESSION['user']['ma_kh'];
        $sql = "INSERT into cart(id_user,id_pro,img,namepro,price,soluong,thanhtien,id_bill) values ('$idkh','$cart[0]','$cart[2]','$cart[1]','$cart[4]','$cart[3]','$tongdon','$id_bill')";
        pdo_execute($sql);
    };
    header('location: billcomfirm.php?id=' . $id_bill . '');
    die;
    }
    
}


?>

<form action="bill.php" method="post">
    <div class="row_cart mb">
        <div class="cart mb">
            <h2>Thông tin đặt hàng</h2>
            <table>
                <tr>
                    <td>Người đặt</td>
                    <td><input class="form-control" id="floatingInput" type="text" name="name" value="<?= $name ?>" required></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input class="form-control" id="floatingInput" type="text" name="diachi" value="<?= $diachi ?>" required></td>
                <tr>
                    <td><div class="form-check" >
                            <input class="form-check-input"  type="radio" checked value="Thành phố Hồ Chí Minh" name="radio" id="hide">
                            <label class="form-check-label" for="flexRadioDefault1" >
                                Thành phố Hồ Chí Minh
                            </label>
                    </div><td>
                    <div class="form-check"  style="margin-left:20px" >
                            <input class="form-check-input" type="radio"  name="radio" value="Thành phố Hà Nội" id="hide1">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Thành phố Hà Nội
                            </label>
                    </div>
                    <td><div class="form-check" >
                            <input class="form-check-input"  type="radio"  name="radio" id="appear" value="Các tỉnh thành khác">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Các tỉnh thành khác
                            </label>
                            <input type="text" id="content" class="form-control" placeholder="Tỉnh thành khác" aria-label="Tỉnh thành khác" name="dcgh">
                        </div></td>
                        <script language="javascript">

                        document.getElementById("hide").onclick = function () {
                            document.getElementById("content").style.display = 'none';
                            document.getElementById("content").value = "Thành phố Hồ Chí Minh";
                        };

                        document.getElementById("hide1").onclick = function () {
                            document.getElementById("content").style.display = 'none';
                            document.getElementById("content").value = "Thành phố Hà Nội";
                        };

                        document.getElementById("appear").onclick = function () {
                            document.getElementById("content").style.display = 'block';
                            document.getElementById("content").value = "";
                        };
                        </script>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" id="floatingInput" type="email" name="email" value="<?= $email ?>" required></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input class="form-control" id="floatingInput" type="number" name="sdt" value="<?= $sdt ?>" required></td>
                </tr>
            </table>
        </div>
        <hr>
        <h3>Phương thức thanh toán</h3>
        <div class="cart mb">
            <select class="form-select" name="pttt" aria-label="Default select example">
                <option selected hidden value="loi">Phương thức thanh toán</option>
                <option value="Thanh toán COD" >Thanh toán COD</option>
                <option value="Chuyển khoản ngân hàng" >Chuyển khoản ngân hàng</option>
                <option value="Thanh toán online" >Thanh toán online</option>
            </select>
        </div>
        <hr>
        <div class="cart mb">
            <h3>Thông tin giỏ hàng</h3><br>
            <table class="table table-hover">
                <tr>
                    <th scope="col">Mã hàng hóa</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Số lượng sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                </tr>
                <?php $tong = 0;
                $i = 0; ?>
                    <?php foreach ($_SESSION['mycart'] as $sp_add) : ?>
                        <?php $ttien = $sp_add[3] * $sp_add[4]; ?>
                        <?php $tong += $ttien; ?>
                        <?php $id_xoa = '<a href="cart_del.php?id=' . $i . '"><input type="submit" value="Xóa"></a>'; ?>
                        <tr scope="row">
                            <td ><?= $sp_add[0] ?></td>
                            <td ><?= $sp_add[1] ?></td>
                            <td ><img src="admin/upload_sp/<?= $sp_add[2] ?>" width="120" alt=""></td>
                            <td ><?= $sp_add[3] ?></td>
                            <td ><?= $ttien ?> VNĐ</td>
                        </tr>
                        <?php $i += 1 ?>
                    <?php endforeach ?>
                    <br>
                    <tr>
                        <th colspan="4">Tổng đơn hàng</th>
                        <td><span style="color:red;font-weight:bold;font-size:20px;"><?= $tong ?> VNĐ</span></td>
                    </tr>
                    <?php
                        if ($tong===0) {
                            echo '<script>alert("Giỏ hàng của bạn đang trống");</script>';
                            echo '<script>window.location.href="cart.php";</script>';
                            exit;
                        }
                    ?>
            </table>
            <a href="bill.php"><input type="submit" name="comfirm" value="Hoàn tất đặt hàng"></a>
        </div>
    </div>
</form>

<?php
include 'footer.php';
?>