<?php
session_start();
include 'pdo/pdo.php';
$id = $_GET['ma_hh'];
$sql = "SELECT * from binh_luan where ma_hh = $id order by ngay_bl desc";
$dsbl = pdo_query($sql);


if (isset($_SESSION['user'])) {
    $u = $_SESSION['user']['ma_kh'];
    $today = date("Y/m/d H:i:s");

    if (isset($_POST['guibl'])) {
        $ndbl = $_POST['bl'];
        $sql = "INSERT into binh_luan(noi_dung,ma_hh,ma_kh,ngay_bl) values  ('$ndbl', '$id', '$u', '$today')";
        pdo_execute($sql);
        header('location: sanpham_chitiet.php?ma_hh='.$id.'');
        die;
    }
}

?>

<html>

<head>
    <style>
        .row-bl {
            text-align: center;
        }

        .row-bl table th:nth-child(1) {
            width: 50%;
        }

        .row-bl table th:nth-child(2) {
            width: 20%;
        }

        .row-bl table th:nth-child(3) {
            width: 30%;
        }

        .row-bl table td:nth-child(1) {
            width: 50%;
        }

        .row-bl table td:nth-child(2) {
            width: 20%;
        }

        .row-bl table td:nth-child(3) {
            width: 30%;
        }
        .row-bl table th,
        .row-bl table td{
            text-align: center;
        }
    </style>
</head>
<div class="row-bl">
    <table>
        <tr>
            <th>Thời gian</th>
            <th>Tên người dùng</th>
            <th>Nội dung bình luận</th>
        </tr>
        <?php foreach ($dsbl as $bl) : ?>
            <?php $makh = $bl['ma_kh']; $sql = "SELECT * from tai_khoan where ma_kh = $makh"; $kh = pdo_query_one($sql);?>
            <tr>
                <td><?= $bl['ngay_bl'] ?></td>
                <td><?= $kh['ten_kh'] ?></td>
                <td><?= $bl['noi_dung'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>

</div>

</html>