<?php 
require_once '../pdo/pdo.php';
require_once 'headeradmin.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $tentinh = $_POST['ten_tinh'];
    $link = $_POST['link'];
    $dc = $_POST['dia_chi'];
    $hl = $_POST['hotline'];
    $sql = "INSERT into chi_nhanh(ten_tinh,link_map,dia_chi,hotline) VALUES('$tentinh','$link','$dc','$hl')";
    pdo_execute($sql);
    $thongbao = "Thêm mới thành công";

}


?>

<div class="title-page">
    <h2>Thêm chi nhánh</h2>
</div>
<?php if(isset($thongbao)){echo $thongbao;} ?>
<div class="row">
    <form action="ql_chi_nhanh.php" method="post" enctype="multipart/form-data">
        <div class="mb">
            <label for="">Tên tỉnh</label>
            <br>
            <input type="text" name="ten_tinh" required placeholder="Tên tỉnh">
        </div>
        <br>
        <div class="mb">
            <label for="">Link google map chi nhánh</label>
            <br>
            <input type="text" name="link" required placeholder="Link map chi nhánh">
        </div>
        <br>
        <div class="mb">
            <label for="">Địa chỉ</label>
            <br>
            <input type="text" name="dia_chi" required placeholder="Địa chỉ">
        </div>
        <br>
        <div class="mb">
            <label for="">Hotline</label>
            <br>
            <input type="text" name="hotline" required placeholder="Hotline">
        </div>
        <input type="submit" value="Thêm mới">
        <input type="reset" value="Nhập lại">
        <a href="ds_cn.php"><input type="button" value="Danh sách chi nhánh"></a>
    </form>
</div>

<?php 
require_once 'footeradmin.php';
?>