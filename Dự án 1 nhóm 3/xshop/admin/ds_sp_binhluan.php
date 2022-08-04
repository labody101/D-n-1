<?php
include 'headeradmin.php';
include '../pdo/pdo.php';

$sql = "SELECT * from hang_hoa order by ma_hh desc";
$ds = pdo_query($sql);

?>

<div class="dsloai_hang mb">
    <table>
        <tr>
            <th>Mã sản phẩm</th>
            <th>tên sản phẩm</th>
            <th>ảnh sản phẩm</th>
            <th>danh sách bình luận</th>
        </tr>
        
            <?php foreach ($ds as $d) : ?>
                <tr>
                <td><?= $d['ma_hh'] ?></td>
                <td><?= $d['ten_hh'] ?></td>
                <td><img src="upload_sp/<?= $d['hinh'] ?>" width="120" alt=""></td>
                <td><a href="list_bl.php?ma_hh=<?=$d['ma_hh']?>">Danh sách bình luận</a></td>
                </tr>
            <?php endforeach ?>
        


    </table>
</div>


<?php
include 'footeradmin.php';
?>