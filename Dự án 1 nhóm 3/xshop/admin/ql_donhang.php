<?php
include 'headeradmin.php';
include '../pdo/pdo.php';

function loadall_bill($iduser){
    $sql = "SELECT * from bill where 1";
    if($iduser>0) $sql .= " AND id_user = ".$iduser;
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function ten($idbill){
    $sql = "SELECT tong_sp from final_bill where id_bill = $idbill";
    $result = pdo_query_one($sql);
    $ten=implode ('p', $result);
    return $ten;
}
function get_ttdh($n)
{
    switch ($n) {
        case 0:
            $tt = "Đơn hàng mới";
            break;
        case 1:
            $tt = "Đang xử lí";
            break;
        case 2:
            $tt = "Đang giao hàng";
            break;
        case 3:
            $tt = "Hoàn tất";
            break;

        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}

function loadall_count($idbill)
{
    $sql = "SELECT * from cart where id_bill = $idbill";
    $bill = pdo_query($sql);
    return sizeof($bill);
}
$listbill = loadall_bill(0);

?>

<div class="row_bill mb">
    <div class="bill mb">
        <table>
            <tr>
                <th>Mã đươn hàng</th>
                <th>Khách hàng</th>
                <th>Sản phẩm</th>
                <th>Số lượng hàng</th>
                <th>Giá trị đơn hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Tình trạng đơn hàng</th>
                <th>Chức năng</th>
            </tr>
            <?php foreach($listbill as $l): ?>
                <?php $kh = $l['bill_name'] ."<br>". $l['bill_address']."<br>".$l['bill_email']."<br>".$l['bill_tel'] ?>
                <?php $countsp = loadall_count($l['id']); ?>
                <?php $ttdh = get_ttdh($l['bill_status']) ?>
                <?php $ten = ten($l['id']); ?>
                <tr>
                <td>Order-<?=$l['id']?></td>
                <td><?=$kh?></td>
                <td><?=$ten?></td>
                <td><?=$countsp?></td>
                <td><?=$l['total']?> VNĐ</td>
                <td><?=$l['ngay_dat_hang']?></td>
                <td><?=$ttdh?></td>
                <td><a href="sua_donhang.php?id=<?= $l['id'] ?>"><input type="button" value="Sửa"></a> / <a href="xoa_donhang.php?id=<?= $l['id'] ?>"><input type="button" value="Xóa"></a> / <a href="../billcomfirm.php?id=<?=$l['id']?>"><input type="button" value="Chi tiết"></a></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>


<?php 
include 'footeradmin.php';
?>