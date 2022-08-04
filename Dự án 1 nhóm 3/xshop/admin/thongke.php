<?php 
include 'headeradmin.php';
include '../pdo/pdo.php';

function loadall_thongke(){
    $sql = "SELECT loai.ma_loai, loai.ten_loai, count(hang_hoa.ma_hh) as countsp, min(hang_hoa.don_gia) as minprice, max(hang_hoa.don_gia) as maxprice, avg(hang_hoa.don_gia) as avgprice";
    $sql .= " from hang_hoa left join loai on loai.ma_loai = hang_hoa.ma_loai";
    $sql .= " group by loai.ma_loai order by loai.ma_loai desc";
    $list_tk = pdo_query($sql);
    return $list_tk;
}
$list_tk = loadall_thongke();

?>

<div class="row_tk">
    <div class="tk">
        <table>
            <tr>
                <th>Mã danh mục</th>
                <th>Loại hàng</th>
                <th>Số lượng</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhất</th>
                <th>Giá trung bình</th>
            </tr>
        
        <?php foreach($list_tk as $tk): ?>
            <tr>
                <td><?=$tk['ma_loai']?></td>
                <td><?=$tk['ten_loai']?></td>
                <td><?=$tk['countsp']?></td>
                <td><?=$tk['maxprice']?></td>
                <td><?=$tk['minprice']?></td>
                <td><?=$tk['avgprice']?></td>
            </tr>
        <?php endforeach ?>
        </table>
    </div>
    <a href="bieudo.php"><input type="button" value="Xem biểu đồ"></a>
</div>


<?php
include 'footeradmin.php';
?>