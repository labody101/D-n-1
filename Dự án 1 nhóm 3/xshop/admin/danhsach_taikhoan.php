<?php
include 'headeradmin.php';
include '../pdo/pdo.php';


$sql = "SELECT * FROM tai_khoan order by ma_kh desc";
$dstk = pdo_query($sql);


?>

<div class="title-page">
    <h2>Danh sách loại hàng</h2>
</div>

<div class="dshang_hoa mb">

    <table>
        <tr>
            <th></th>
            <th>Mã khách hàng</th>
            <th>Tài khoản</th>
            <th>Mật khẩu</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Ảnh</th>
            <th></th>
        </tr>
        <?php foreach ($dstk as $ds) : ?>
            <tr>
                <td></td>
                <td><?= $ds['ma_kh'] ?></td>
                <td><?= $ds['user'] ?></td>
                <td><?= $ds['pass'] ?></td>
                <td><?= $ds['email'] ?></td>
                <td><?= $ds['diachi'] ?></td>
                <td><?= $ds['sdt'] ?></td>
                <td><img src="../img_user/<?= $ds['anh_dai_dien'] ?>" width="120px" alt=""></td>
                <td><a href="sua_tk.php?ma_kh=<?= $ds['ma_kh'] ?>"><input type="button" value="Sửa"></a> / <a href="xoa_tk.php?ma_kh=<?= $ds['ma_kh'] ?>"><input type="button" value="Xóa"></a></td>

            </tr>
        <?php endforeach ?>
    </table>
</div>
<div class="row">
    <!-- <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn"> -->
</div>
<?php
include  'footeradmin.php';
?>