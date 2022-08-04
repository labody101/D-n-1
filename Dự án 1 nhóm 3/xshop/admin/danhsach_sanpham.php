<?php
include 'headeradmin.php';
include '../pdo/pdo.php';

$sql = "SELECT * from loai";
$loai = pdo_query($sql);
$sql = "SELECT * FROM hang_hoa order by ma_hh desc";
$dshh = pdo_query($sql);


?>

<div class="title-page">
    <h2>Danh sách loại hàng</h2>
</div>

<div class="dshang_hoa mb">

    <table>
        <tr>
            <th></th>
            <th>Mã hàng hóa</th>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Giảm giá</th>
            <th>Hình</th>
            <th>Ngày nhập</th>
            <th>Mô tả</th>
            <th>Số lượt xem</th>
            <th>Mã loại</th>
            <th></th>
        </tr>
        <?php foreach ($dshh as $ds) : ?>
            <tr>
                <td></td>
                <td><?= $ds['ma_hh'] ?></td>
                <td><?= $ds['ten_hh'] ?></td>
                <td><?= $ds['don_gia'] ?></td>
                <td><?= $ds['so_luong'] ?></td>
                <td><?= $ds['giam_gia'] ?></td>
                <td><img src="upload_sp/<?= $ds['hinh'] ?>" width="120px" alt=""></td>
                <td><?= $ds['ngay_nhap'] ?></td>
                <td><?= $ds['mo_ta'] ?></td>
                <td><?= $ds['so_luot_xem'] ?></td>
                <td><?= $ds['ma_loai'] ?></td>
                <td><a href="update_sp.php?ma_hh=<?= $ds['ma_hh'] ?>"><input type="button" value="Sửa"></a> / <a href="delete_sp.php?ma_hh=<?= $ds['ma_hh'] ?>"><input type="button" value="Xóa"></a></td>

            </tr>
        <?php endforeach ?>
    </table>
</div>
<div class="row">
    <!-- <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn"> -->
    <a href="add_sp.php"><input type="button" value="Thêm sản phẩm mới"></a>
</div>
<?php
include  'footeradmin.php';
?>