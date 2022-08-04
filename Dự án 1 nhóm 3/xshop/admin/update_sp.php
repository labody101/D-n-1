<?php
include '../pdo/pdo.php';

$id_update = $_GET['ma_hh'];
$sql = "SELECT * FROM hang_hoa where ma_hh = $id_update";
$sp_update = pdo_query_one($sql);

$sql = "SELECT * FROM loai";
$loai = pdo_query($sql);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mahh = $_POST['ma_hh'];
    $tenhh = $_POST['ten_hh'];
    $gia = $_POST['gia'];
    $sl = $_POST['soluong'];
    $giamgia = $_POST['giamgia'];
    $ngaynhap = $_POST['ngaynhap'];
    $mota = $_POST['mota'];
    $danhmuc = $_POST['madm'];
    $anh = $_POST['anhsp'];

    if ($_FILES['anhsp']['size'] > 0) {
        $anh = $_FILES['anhsp']['name'];
    }
    $sql = "UPDATE hang_hoa SET ten_hh = '$tenhh',don_gia = '$gia',so_luong = '$sl',giam_gia = '$giamgia',hinh = '$anh',ngay_nhap = '$ngaynhap',mo_ta = '$mota',ma_loai = '$danhmuc' where ma_hh = $mahh";
    pdo_execute($sql);

    if ($_FILES['anhsp']['size'] > 0) {
        move_uploaded_file($_FILES['anhsp']['tmp_name'], 'upload_sp/' . $anh);
        
    }
    $thongbao = "Cập nhật thành công";

header('location: danhsach_sanpham.php?message=Cập nhật dữ liệu thành công');
die;
}

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
    <form action="update_sp.php?ma_hh=<?=$sp_update['ma_hh']?>" method="post" enctype="multipart/form-data">
        <div class="mb">
            <label for="">Mã hàng hóa</label>
            <br>
            <input type="text" name="ma_hh" value="<?=$sp_update['ma_hh']?>" disabled placeholder="Mã hàng hóa">
            <input type="hidden" name="ma_hh" value="<?=$sp_update['ma_hh']?>">
        </div>
        <br>
        <div class="mb">
            <label for="">Tên sản phẩm</label>
            <br>
            <input type="text" name="ten_hh" value="<?=$sp_update['ten_hh']?>" placeholder="Tên sản phẩm" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Giá sản phẩm</label>
            <br>
            <input type="number" name="gia" value="<?=$sp_update['don_gia']?>" placeholder="Giá sản phẩm" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Số lượng</label>
            <br>
            <input type="number" name="soluong" value="<?=$sp_update['so_luong']?>" placeholder="Số lượng sản phẩm" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Giảm giá</label>
            <br>
            <input type="number" name="giamgia" value="<?=$sp_update['giam_gia']?>" placeholder="Giảm giá" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Hình ảnh sản phẩm</label>
            <br>
            <input type="file" name="anhsp" value="<?=$sp_update['hinh']?>" placeholder="ảnh sản phẩm" >
            <img src="upload_sp/<?=$sp_update['hinh']?>" width="200" alt="">
            <input type="hidden" name="anhsp" value="<?=$sp_update['hinh']?>" placeholder="ảnh sản phẩm" >
        </div>
        <br>
        <div class="mb">
            <label for="">Ngày nhập</label>
            <br>
            <input type="date" name="ngaynhap" value="<?=$sp_update['ngay_nhap']?>" placeholder="Ngày nhập" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Mô tả sản phẩm</label>
            <br>
            <textarea name="mota" id="" cols="30" rows="10"> <?=$sp_update['mo_ta']?> </textarea>
        </div>
        <br>
        <div class="mb">
            <label for="">Số lượt xem</label>
            <br>
            <input type="text" name="luotxem" value="<?=$sp_update['so_luot_xem']?>" disabled>
        </div>
        <br>
        <div class="mb">
            <select name="madm" id="">
                <?php foreach ($loai as $dm): ?>
                    <?php if($dm['ma_loai'] == $sp_update['ma_loai']): ?>
                        <option value="<?= $dm['ma_loai'] ?>" selected> <?= $dm['ten_loai'] ?> </option>
                    <?php else : ?>
                        <option value="<?= $dm['ma_loai'] ?>" > <?= $dm['ten_loai'] ?> </option>
                    <?php endif ?>
                <?php endforeach ?>
            </select>
        </div>
        <br>
        <input type="submit" name="update_sp" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="danhsach_sanpham.php"><input type="button" value="Danh sách sản phẩm"></a>
    </form>
</div>

<?php
include 'footeradmin.php';
?>