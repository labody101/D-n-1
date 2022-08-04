<?php
include 'headeradmin.php';
include '../pdo/pdo.php';

$sql = "SELECT * from loai order by ma_loai desc";
$dsloaihang = pdo_query($sql);
?>

<div class="title-page">
    <h2>Danh sách loại hàng</h2>
</div>
<div class="dsloai_hang mb">
    <table formdsloai>
        <tr>
            <th></th>
            <th>Mã loại</th>
            <th>Tên loại</th>
            <th></th>
        </tr>
        <?php foreach ($dsloaihang as $dslh) : ?>
            <tr>
                <td></td>
                <td><?= $dslh['ma_loai'] ?></td>
                <td><?= $dslh['ten_loai'] ?></td>
                <td><a href="update_loaihang.php?ma_loai=<?=$dslh['ma_loai']?>"><input type="button" value="Sửa"></a> / <a href="xoaloaihang.php?ma_loai=<?=$dslh['ma_loai']?>"><input type="button" value="Xóa"></a></td>

            </tr>
        <?php endforeach ?>
    </table>
</div>
<div class="row">
    <a href="danhmuc.php"><input type="button" value="Thêm loại hàng mới"></a>
</div>
<?php
include  'footeradmin.php';
?>