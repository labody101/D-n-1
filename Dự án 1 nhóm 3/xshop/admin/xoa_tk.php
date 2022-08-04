<?php
include '../pdo/pdo.php';
if ($_GET['ma_kh']) {
    $idxoa = $_GET['ma_kh'];
    $sql = "SELECT * from tai_khoan where vai_tro = 1";
    $tk = pdo_query_one($sql);

    if ($tk['vai_tro'] == 1) {
        echo "Bạn không thể xóa tài khoản này";
    } else {
        $sql = "DELETE FROM tai_khoan where ma_kh=$idxoa";
        pdo_query($sql);
        header('location: danhsach_taikhoan.php?message=Xóa dữ liệu thành công');
        die;
    }
}
