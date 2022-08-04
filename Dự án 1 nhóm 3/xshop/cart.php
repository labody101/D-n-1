<?php
include 'header.php';
include 'pdo/pdo.php';

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $id = $_POST['ma_hh'];
//     $tensp = $_POST['ten_hh'];
//     $anh = $_POST['anhsp'];
//     $sl = $_POST['so_luong'];
//     $gia = $_POST['gia'];
//     $addsp = [$id,$tensp,$anh,$sl,$gia];
//     array_splice($_SESSION['mycart'], $addsp[$id],1,$sl);
//     header('location: bill.php');
//     die;
// }
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

?>
<div class="row_cart">
    <div class="ds_cart mb">
        <table>
            <tr>
                <th>Mã hàng hóa</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Số lượng sản phẩm</th>
                <th>Đơn giá</th>
                <th>Chức năng</th>
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
                <th colspan="4">Tổng đơn hàng</th>
                <td><?= $tong ?> VNĐ</td>
            </tr>
        </table>
        <br>
        <a href="cart_del.php"><input type="button" value="Xóa tất cả trong giỏ hàng"></a> /
        <a href="bill.php"><input type="button" value="Đặt hàng"></a>
    </div>
    <a href="ds_donhang.php">Đơn hàng của tôi</a>
</div>


<?php
include 'footer.php';
?>