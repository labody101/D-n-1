<?php
include '../pdo/pdo.php';
if($_GET['id']){
    $idxoa = $_GET['id'];
    $sql = "DELETE FROM chi_nhanh where id=$idxoa";
    pdo_execute($sql);
    header('location: ds_cn.php?message=Xóa dữ liệu thành công');
    die;
}
?>