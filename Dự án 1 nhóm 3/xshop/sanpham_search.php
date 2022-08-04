<?php
include 'pdo/pdo.php';
include 'header.php';

$sql = "SELECT * from loai";
$dm = pdo_query($sql);

if (isset($_GET['pro-search']) && $_GET['pro-search'] <> "") {
    $keyword = $_GET['pro-search'];
    $sql = "SELECT * from hang_hoa where ten_hh like '%".$keyword."%'";
    $sp_search = pdo_query($sql);
    if(count($sp_search)==0){
        $thongbao = "Sản phẩm không hợp lệ";
    }
} else {
    $keyword = "";
    $thongbao = "Sản phẩm không hợp lệ";
}


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
        <?php if(isset($thongbao)){echo $thongbao;} ?>
        <div class="dong3">
            <?php foreach ($sp_search as $s) : ?>
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
include 'footer.php';

?>