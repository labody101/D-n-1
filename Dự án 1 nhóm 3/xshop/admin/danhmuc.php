<?php
include '../pdo/pdo.php';
if (isset($_POST['insert_loai'])) {
    $tenloai = $_POST['ten_loai'];
    $sql = "SELECT ten_loai FROM loai Where ten_loai like '$tenloai'";
    $slname = pdo_query($sql);
        if (count($slname) > 0) {
            $loaitt = "Loại hàng đã tồn tại";
        } else {
            $sql = "INSERT INTO loai(ten_loai) VALUES ('$tenloai')";
            pdo_query($sql);
            $thongbao = "Thêm mới thành công";
        }
}
?>

<?php
include 'headeradmin.php';
?>

<div class="title-page">
    <h2>Thêm mới loại hàng</h2>
</div>
<?php
if (isset($loaitt)) {
    echo $loaitt;
}
if (isset($thongbao)) {
    echo $thongbao;
}
?>
<div class="row">
    <form action="" method="post">
        <div class="mb">
            <label for="">Mã loại</label>
            <br>
            <input type="text" name="ma_loai" disabled placeholder="Mã loại">
        </div>
        <br>
        <div class="mb">
            <label for="">Tên loại</label>
            <br>
            <input type="text" name="ten_loai" placeholder="Tên loại" required>
        </div>
        <br>
        <input type="submit" name="insert_loai" value="Thêm mới">
        <input type="reset" value="Nhập lại">
        <a href="danhsach_loaihang.php"><input type="button" value="Danh sách"></a>
    </form>
</div>

<?php
include 'footeradmin.php';
?>