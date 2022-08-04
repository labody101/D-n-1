<?php 
require_once '../pdo/pdo.php';
require_once 'headeradmin.php';

$sql = "SELECT * from chi_nhanh order by id";
$list_cn = pdo_query($sql);

?>

<div class="title-page">
    <h2>Danh sách chi nhánh</h2>
</div>

<div class="ds_cn">
    <table>
        <tr>
            <th>ID</th>
            <th>Tên tỉnh</th>
            <th>Link map</th>
            <th>Địa chỉ</th>
            <th>HotLine</th>
            <th>Chức năng</th>
        </tr>
        <?php foreach($list_cn as $l): ?>
            <tr>
                <td><?=$l['id']?></td>
                <td><?=$l['ten_tinh']?></td>
                <td><?=$l['link_map']?></td>
                <td><?=$l['dia_chi']?></td>
                <td><?=$l['hotline']?></td>
                <td><a href="sua_cn.php?id=<?=$l['id']?>"><input type="button" value="Sửa"></a> / <a href="dele_cn.php?id=<?=$l['id']?>"><input type="button" value="Xóa"></a></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php 
require_once 'footeradmin.php';
?>