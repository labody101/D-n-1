<?php
    $servername = "localhost";
    $database = "xshop2";
    $username = "root";
    $password = "";    
    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($conn, "uft8");
    // Check connection
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    } 
    ?>
<?php
include 'header.php';
include 'pdo/pdo.php';

$idsp = $_GET['ma_hh'];
$sql = "SELECT * from hang_hoa where ma_hh = $idsp";
$sp = pdo_query_one($sql);

$sql = "SELECT * from hang_hoa where ma_hh=$idsp";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sql="SELECT * from hang_hoa where bien_the=$row[bien_the]";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
var_dump($row); 


$id_cungloai = $sp['ma_loai'];
$ma_sp = $sp['ma_hh'];

$sql = "SELECT * from hang_hoa where ma_loai = $id_cungloai and ma_hh <> $ma_sp limit 0,3";
$sp_cungloai = pdo_query($sql);

$sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh = $idsp ";
pdo_execute($sql);

if(!isset($_SESSION['mycart'])){$_SESSION['mycart'] = [];}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['ma_hh'];
    $tensp = $_POST['ten_hh'];
    $anh = $_POST['anhsp'];
    $sl = $_POST['so_luong'];
    $gia = $_POST['gia'];
    $sp_add = [$id,$tensp,$anh,$sl,$gia];   
    array_push($_SESSION['mycart'],$sp_add);
    header('location: cart.php');
    die;
}

?>

<div class="row_sp_chitiet">
    <div class="pro_chitiet">
        <img src="admin/upload_sp/<?= $sp['hinh'] ?>" width="30%" alt="">
        <br>
        <?php foreach($sp_cung_loai as $spcl): ?>
            <img src="admin/upload_sp/<?= $spcl['hinh'] ?>" alt="">
        <?php endforeach ?>
        <br>
        <h3><?= $sp['ten_hh'] ?></h3>
        <p>Giá gốc: <del><?= $sp['don_gia'] ?> VNĐ</del></p>
        <p>Giảm giá: <?= $sp['giam_gia'] ?>%</p>
        <p>Giá sau giảm: <?= $sp['don_gia'] - $sp['don_gia'] * 1 / 10 ?> VNĐ</p>
        <br>
        <h2>Thiết kế sản phẩm</h2>
        <p><?= $sp['mo_ta'] ?></p>
        <form action="sanpham_chitiet.php?ma_hh=<?=$sp['ma_hh']?>" method="post">
            <input type="hidden" name="ma_hh" value="<?=$sp['ma_hh']?>">
            <input type="hidden" name="ten_hh" value="<?=$sp['ten_hh']?>">
            <input type="hidden" name="gia" value="<?=($sp['don_gia'] - $sp['don_gia'] * 1 / 10)?>">
            <input type="number" name="so_luong" value="<?=($sp['so_luong'] / $sp['so_luong'])?>">
            <input type="hidden" name="anhsp" value="<?=$sp['hinh']?>">
            <br>
            <input type="submit" value="Thêm vào giỏ hàng">
        </form>
    </div>


    <hr width="95%">
    <div class="pro_binhluan">
        <h2>Bình luận</h2>
        <iframe src="binhluan.php?ma_hh=<?= $sp['ma_hh'] ?>" width="100%" height="300">
        </iframe>
        <?php if (isset($_SESSION['user'])) { ?>
            <form action="binhluan.php?ma_hh=<?=$sp['ma_hh']?>" method="POST">
                <input type="text" name="bl" placeholder="Bình luận" required>
                <input type="submit" name="guibl" value="Gửi bình luận">
            </form>
        <?php } else { ?>
            <p>Hãy đăng nhập để bình luận</p>
        <?php } ?>



    </div>
    <hr width="95%">
    <div class="sp_cungloai">
        <h2>Sản phẩm cùng loại</h2>
        <div class="dong3">
            <?php foreach ($sp_cungloai as $s) : ?>
                <div class="product3">
                    <a href="sanpham_chitiet.php?ma_hh=<?= $s['ma_hh'] ?>"><img class="img-fluid" src="admin/upload_sp/<?= $s['hinh'] ?>" width="120" alt=""></a>
                    <br>
                    <a href="sanpham_chitiet.php?ma_hh=<?= $s['ma_hh'] ?>">
                        <h3><?= $s['ten_hh'] ?></h3>
                    </a>
                    <p><?= $s['don_gia'] ?> VNĐ</p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>




<?php
require 'footer.php';
?>