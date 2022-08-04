<?php
include '../pdo/pdo.php';
if($_GET['ma_loai']){
    $idxoa = $_GET['ma_loai'];
    $sql = "DELETE FROM loai where ma_loai=$idxoa";
    pdo_query($sql);
    header('location: danhsach_loaihang.php?message=Xóa dữ liệu thành công');
    die;
}
?>