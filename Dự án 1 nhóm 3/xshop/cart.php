<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
include 'header.php';
include 'pdo/pdo.php';

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

?>
<div class="status" style="display:grid;grid-template-columns: 3fr 1fr 1fr 1fr 1fr 1fr 3fr">
    <div class="0"></div>
    <div class="1">
        <span class="iconify" data-icon="bi:1-square-fill" style="color: #699bf7; font-size: 30px;"></span>
        <span>Giỏ hàng</span>
    </div>
    <hr width="80%" style="margin: auto">
    <div class="2">
        <span class="iconify" data-icon="bi:2-square" style="color: #699bf7; font-size: 30px;"></span>
        <span>Đặt hàng</span>
    </div>
    <hr width="80%" style="margin: auto">
    <div class="3">
        <span class="iconify" data-icon="bi:3-square" style="color: #699bf7; font-size: 30px;"></span>
        <span>Hoàn tất</span>
    </div>
</div>
<br>
<h1 style="text-align:center">Giỏ hàng</h1>
<div class="row_cart">
    <div class="ds_cart mb">
            <table style="border:1px solid #ccc" class="table table-hover table-borderless ">
            <thead>
                <tr>
                    <th scope="col" style="color:#00008B" >Mã hàng hóa</th>
                    <th scope="col" style="color:#00008B">Tên sản phẩm</th>
                    <th scope="col" style="color:#00008B">Ảnh sản phẩm</th>
                    <th scope="col" style="color:#00008B">Số lượng sản phẩm</th>
                    <th scope="col" style="color:#00008B">Đơn giá</th>
                </tr>
            </thead>
            <?php $tong = 0;
            $i = 0; ?>
            <?php foreach ($_SESSION['mycart'] as $sp_add) : ?>
                    <?php $ttien = $sp_add[3] * $sp_add[4]; ?>
                    <?php $tong += $ttien; ?>
                    <?php $id_xoa = '<a href="cart_del.php?id=' . $i . '"><span class="iconify" data-icon="mdi:delete-circle" style="color: #f24e1e; font-size: 50px; margin:  50px 30px"></span></a>'; ?>
                    <tbody class="table-success">
                        <tr>
                            <td><?= $sp_add[0] ?></td>
                            <td><?= $sp_add[1] ?></td>
                            <td><img src="admin/upload_sp/<?= $sp_add[2] ?>" width="120" alt=""></td>
                            <td><?= $sp_add[3] ?></td>
                            <td style="font-weight:bold"><?= $ttien ?> ₫</td>
                            <td><?= $id_xoa ?></td>
                        </tr>
                    </tbody>
                    <?php $i += 1 ?>
            <?php endforeach ?>
            <tr>
                <th colspan="5">Tổng đơn hàng</th>
                <td><span style="color:#DC143C;font-weight:bold;font-size:20px;"><?= $tong ?> ₫</span></td>
            </tr>
        </table>
        <br>
        <div class="btn" style="margin-left:360px">
            <a href="cart_del.php"><input type="button" value="Xóa tất cả trong giỏ hàng"></a> 
            <a href="bill.php"><input type="button" value="Đặt hàng"></a>
        </div>
    </div>
    <a href="ds_donhang.php">Đơn hàng của tôi</a>
</div>


<?php
include 'footer.php';
?>