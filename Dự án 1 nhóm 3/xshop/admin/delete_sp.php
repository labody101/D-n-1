<?php
include '../pdo/pdo.php';
if($_GET['ma_hh']){
    $idxoa = $_GET['ma_hh'];
    $sql = "DELETE FROM hang_hoa where ma_hh=$idxoa";
    pdo_execute($sql);
    header('location: danhsach_sanpham.php?message=Xóa dữ liệu thành công');
    die;
}
?>