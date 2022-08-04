<?php
require 'header.php';
include 'pdo/pdo.php';

$sql = "SELECT * from loai order by ma_loai desc";
$dm = pdo_query($sql);

$sql = "SELECT * from hang_hoa order by ma_hh";
$sp = pdo_query($sql);


?>
<div class="row_sp">
    <div class="cot_trai">
        <ul>
            <h2>Danh mục</h2>
            <?php foreach ($dm as $l) : ?>
                <li><a href="sanpham_loc.php?ma_loai=<?= $l['ma_loai'] ?>"> <?= $l['ten_loai'] ?> </a></li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="cot_phai">
        <h2>Sản phẩm</h2>
            <hr width="95%">
            <div class="dong3">
            <?php foreach ($sp as $s) : ?>
                <div class="product3">
                    <a href="sanpham_chitiet.php?ma_hh=<?=$s['ma_hh']?>"><img class="img-fluid" src="admin/upload_sp/<?= $s['hinh'] ?>" width="120" alt=""></a>
                    <br>
                    <a href="sanpham_chitiet.php?ma_hh=<?=$s['ma_hh']?>">
                        <h4><?= $s['ten_hh'] ?></h4>
                    </a>
                    <a id="price" href="sanpham_chitiet.php?ma_hh=<?=$s['ma_hh']?>"><?= $s['don_gia'] ?> VNĐ</a>
                </div>
            <?php endforeach ?>
            </div>
    </div>
</div>
<?php
require 'footer.php';
?>