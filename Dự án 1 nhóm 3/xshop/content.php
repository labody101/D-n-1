<?php
include 'pdo/pdo.php';
$sql = "SELECT * from hang_hoa order by ma_hh limit 1,2";
$sp = pdo_query($sql);
$sql = "SELECT * from hang_hoa order by ma_hh limit 3,9";
$sp2 = pdo_query($sql);
?>


<div class="row">
<div class="row">
    <div class="dong1">
            <img src="img/banner.jpg" alt="">    
    </div>

    <h1 class="title_line">Sản Phẩm</h1>

    <div class="dong2">
        <?php foreach ($sp2 as $s2) : ?>
            <div class="product2">
                <a href="sanpham_chitiet.php?ma_hh=<?=$s2['ma_hh']?>"><img src="admin/upload_sp/<?= $s2['hinh'] ?>" width="120" alt=""></a>
                <br>
                <a href="sanpham_chitiet.php?ma_hh=<?=$s2['ma_hh']?>">
                    <div class="hover">
                        <a href="sanpham_chitiet.php?ma_hh=<?=$s2['ma_hh']?>">
                            <h4 id="info_none"><?= $s2['ten_hh'] ?></h4>
                            </a>
                            <br>
                            <a id = "price" href="sanpham_chitiet.php?ma_hh=<?=$s2['ma_hh']?>"><?= $s2['don_gia'] ?> VNĐ</a>
                            <p href="" id="buy_now">Mua ngay</p>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>
</div>