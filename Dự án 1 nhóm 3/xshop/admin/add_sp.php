<?php
include '../pdo/pdo.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenhh = $_POST['ten_hh'];
    $gia = $_POST['gia'];
    $sl = $_POST['soluong'];
    $giamgia = $_POST['giamgia'];
    $ngaynhap = $_POST['ngaynhap'];
    $mota = $_POST['mota'];
    $danhmuc = $_POST['madm'];
    $anh = 'no_image.jpg';

    if ($_FILES['anhsp']['size'] > 0) {
        $anh = $_FILES['anhsp']['name'];
    }
    $sql = "INSERT into hang_hoa(ten_hh,don_gia,so_luong,giam_gia,hinh,ngay_nhap,mo_ta,ma_loai) VALUES ('$tenhh','$gia','$sl','$giamgia','$anh','$ngaynhap','$mota','$danhmuc')";
    pdo_execute($sql);

    if ($_FILES['anhsp']['size'] > 0) {
        move_uploaded_file($_FILES['anhsp']['tmp_name'], 'upload_sp/' . $anh);
        
    }
    $thongbao = "Thêm mới thành công";
}
$sql = "SELECT * FROM loai";
$loai = pdo_query($sql);
?>

<?php
include 'headeradmin.php';
?>

<div class="title-page">
    <h2>Thêm mới loại hàng</h2>
</div>
<?php
if (isset($thongbao)) {
    echo $thongbao;
}
?>
<div class="row">
    <form action="add_sp.php" method="post" enctype="multipart/form-data">
        <div class="mb">
            <label for="">Mã hàng hóa</label>
            <br>
            <input type="text" name="ma_hh" disabled placeholder="Mã hàng hóa">
        </div>
        <br>
        <div class="mb">
            <label for="">Tên sản phẩm</label>
            <br>
            <input type="text" name="ten_hh" placeholder="Tên sản phẩm" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Giá sản phẩm</label>
            <br>
            <input type="text" name="gia" placeholder="Giá sản phẩm" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Số lượng</label>
            <br>
            <input type="number" name="soluong" placeholder="Số lượng sản phẩm" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Giảm giá</label>
            <br>
            <input type="number" name="giamgia" placeholder="Giảm giá" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Hình ảnh sản phẩm</label>
            <br>
            <input type="file" name="anhsp" placeholder="ảnh sản phẩm" >
        </div>
        <br>
        <div class="mb">
            <label for="">Ngày nhập</label>
            <br>
            <input type="date" name="ngaynhap" placeholder="Ngày nhập" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Mô tả sản phẩm</label>
            <br>
            <textarea name="mota" id="" cols="30" rows="10"></textarea>
        </div>
        <br>
        <div class="mb">
            <label for="">Số lượt xem</label>
            <br>
            <input type="number" name="luotxem" disabled required>
        </div>
        <br>
        <div class="mb">
            <select name="madm" id="">
                <?php foreach ($loai as $dm): ?>
                    <option value="<?= $dm['ma_loai'] ?>"> <?= $dm['ten_loai'] ?> </option>
                <?php endforeach ?>
            </select>
        </div>
        <br>
        <input type="submit" name="insert_sp" value="Thêm mới">
        <input type="reset" value="Nhập lại">
        <a href="danhsach_sanpham.php"><input type="button" value="Danh sách sản phẩm"></a>
    </form>
</div>

<?php
include 'footeradmin.php';
?>