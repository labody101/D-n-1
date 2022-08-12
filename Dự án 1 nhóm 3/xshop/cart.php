<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
include 'header.php';
include 'pdo/pdo.php';

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

?>
<h1 style="text-align:center">Giỏ hàng</h1>
<div class="row_cart">
    <div class="ds_cart mb">
            <table class="table table-hover">
            <tr>
                <th scope="col">Mã hàng hóa</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Ảnh sản phẩm</th>
                <th scope="col">Số lượng sản phẩm</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Chức năng</th>
            </tr>
            <?php $tong = 0;
            $i = 0; ?>
            <?php foreach ($_SESSION['mycart'] as $sp_add) : ?>
                    <?php $ttien = $sp_add[3] * $sp_add[4]; ?>
                    <?php $tong += $ttien; ?>
                    <?php $id_xoa = '<a href="cart_del.php?id=' . $i . '"><input type="submit" value="Xóa"></a>'; ?>
                    <tr>
                        <td><?= $sp_add[0] ?></td>
                        <td><?= $sp_add[1] ?></td>
                        <td><img src="admin/upload_sp/<?= $sp_add[2] ?>" width="120" alt=""></td>
                        <td><?= $sp_add[3] ?></td>
                        <td><?= $ttien ?> VNĐ</td>
                        <td><?= $id_xoa ?></td>
                    </tr>
                    <?php $i += 1 ?>
            <?php endforeach ?>
            <tr>
                <th colspan="5">Tổng đơn hàng</th>
                <td><span style="color:red;font-weight:bold;font-size:20px;"><?= $tong ?> VNĐ</span></td>
            </tr>
        </table>
        <br>
        <div class="btn" style="margin-left:360px">
            <a href="cart_del.php"><input type="button" value="Xóa tất cả trong giỏ hàng"></a> /
            <a href="bill.php"><input type="button" value="Đặt hàng"></a>
        </div>
    </div>
    <a href="ds_donhang.php">Đơn hàng của tôi</a>
</div>


<?php
include 'footer.php';
?>