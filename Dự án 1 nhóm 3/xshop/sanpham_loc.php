<?php
include 'pdo/pdo.php';
include 'header.php';


$sql = "SELECT * from loai order by ma_loai desc";
$dm = pdo_query($sql);

$iddm = $_GET['ma_loai'];
$sql = "SELECT * from hang_hoa where ma_loai = $iddm";
$sploc = pdo_query($sql);

?>
<div class="row_sp">
<div class="cot_trai">
    <ul>
        <h2>Danh mục</h2>
        <?php foreach ($dm as $l) : ?>
            <li><a href="sanpham_loc.php?ma_loai=<?= $l['ma_loai'] ?>"> <?= $l['ten_loai'] ?> </a></li>
            <!-- <li><a href="#">Kính</a></li>
            <li><a href="#">Ví</a></li>
            <li><a href="#">Túi xách</a></li> -->
        <?php endforeach ?>
    </ul>
</div>

<div class="cot_phai">
    <h2>Sản phẩm</h2>
    <hr width="95%">
    <div class="dong3">
        <?php foreach ($sploc as $s) : ?>
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