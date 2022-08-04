<?php
include 'headeradmin.php';
include '../pdo/pdo.php';

$id = $_GET['id'];
$sql = "SELECT * from bill where id = $id";
$pro = pdo_query_one($sql);

if($_SERVER['REQUEST_METHOD']=='POST'){
    $idbill = $_POST['idsp'];
    $pttt = $_POST['pttt'];
    $status = $_POST['status'];
    $sql = "UPDATE bill set bill_status = '$status', bill_pttt = '$pttt' where id = $idbill";
    pdo_execute($sql);
    header('location: ql_donhang.php');
}

?>

<div class="row">
    <form action="sua_donhang.php?id=<?=$pro['id']?>" method="post">
        Mã đơn hàng
        <br>
        <input type="text" name="idsp" value="<?=$pro['id']?>" disabled>
        <input type="hidden" name="idsp" value="<?=$pro['id']?>" >
        <br>
        Tên khách hàng: <?=$pro['bill_name']?>
        <br>
        Giá trị đơn hàng: <?=$pro['total']?>
        <br>
        <label for="">Phương thức thanh toán</label>
        <br>
        <input type="text" name="pttt" value="<?=$pro['bill_pttt']?>">
        <br>
        <label for="">Trạng thái đơn hàng</label>
        <br>
        <input type="text" name="status" value="<?=$pro['bill_status']?>">
        <br>
        <input type="submit" value="Cập nhật đơn hàng">
    </form>
</div>


<?php 
include 'footeradmin.php';
?>