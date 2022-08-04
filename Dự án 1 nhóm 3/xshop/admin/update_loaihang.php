<?php
include '../pdo/pdo.php';

    $id_update = $_GET['ma_loai'];
    $sql = "SELECT * FROM loai where ma_loai = $id_update";
    $sp_update = pdo_query_one($sql);
    

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tenloai = $_POST['ten_loai'];
    $maloai = $_POST['ma_loai'];
    $sql = "UPDATE loai SET ten_loai = '$tenloai' Where ma_loai=$maloai";
    pdo_execute($sql);
    header('location: danhsach_loaihang.php?message=Cập nhật dữ liệu thành công');
    die;
}

?>

<?php
include 'headeradmin.php';
?>

<div class="title-page">
    <h2>Cập nhật loại hàng</h2>
</div>
<?php
if (isset($thongbao)) {
    echo $thongbao;
}
?>
<div class="row">
    <form action="update_loaihang.php?ma_loai=<?=$sp_update['ma_loai']?>" method="post">
        <div class="mb">
            <label for="">Mã loại</label>
            <br>
            <input type="text" name="ma_loai" value="<?= $sp_update['ma_loai'] ?>" disabled placeholder="Mã loại">
            <input type="hidden" name="ma_loai" value="<?= $sp_update['ma_loai'] ?>">
        </div>
        <br>
        <div class="mb">
            <label for="">Tên loại</label>
            <br>
            <input type="text" name="ten_loai" value="<?= $sp_update['ten_loai'] ?>" placeholder="Tên loại" required>
        </div>
        <br>
        <input type="submit" name="update_loai" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="danhsach_loaihang.php"><input type="button" value="Danh sách"></a>
    </form>
</div>

<?php
include 'footeradmin.php';
?>