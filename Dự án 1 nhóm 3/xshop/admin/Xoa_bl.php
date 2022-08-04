<?php
include '../pdo/pdo.php';
if($_GET['ma_bl']){
    $idxoa = $_GET['ma_bl'];
    $sql = "SELECT * From binh_luan where ma_bl = $idxoa";
    $s = pdo_query_one($sql);
    $sql = "DELETE FROM binh_luan where ma_bl=$idxoa";
    pdo_execute($sql);
    header('location: List_bl.php?ma_hh='.$s['ma_hh'].'');
    die;
}
?>