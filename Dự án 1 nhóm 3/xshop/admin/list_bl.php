<?php 
include 'headeradmin.php';
include '../pdo/pdo.php';

$id = $_GET['ma_hh'];
$sql = "SELECT * FROM binh_luan where ma_hh = $id";
$list = pdo_query($sql);

?>

<div class="ds_bl mb">
    <table>
        <tr>
            <th>Mã bình luận</th>
            <th>Nội dung bình luận</th>
            <th>Mã người bình luận</th>
            <th>Thời gian bình luận</th>
            <th>chức năng</th>
        </tr>
        <?php foreach($list as $l): ?>
            <tr>
                <td><?=$l['ma_bl']?></td>
                <td><?=$l['noi_dung']?></td>
                <td><?=$l['ma_kh']?></td>
                <td><?=$l['ngay_bl']?></td>
                <td><a href="Xoa_bl.php?ma_bl=<?=$l['ma_bl']?>"><input type="button" value="Xóa"></a></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>


<?php 
include 'footeradmin.php';
?>