<?php 
require_once '../pdo/pdo.php';
require_once 'headeradmin.php';

$id = $_GET['id'];
$sql = "SELECT * from chi_nhanh where id = $id";
$cn = pdo_query_one($sql);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $tent = $_POST['ten_tinh'];
    $link = $_POST['link'];
    $dc = $_POST['dia_chi'];
    $hl = $_POST['hotline'];
    $sql = "UPDATE chi_nhanh SET ten_tinh = '$tent', link_map = '$link', dia_chi = '$dc', hotline = '$hl' where id = $id";
    pdo_execute($sql);
    $thongbao = "Chỉnh sửa thành công";
    header('location: ds_cn.php');
}

?>

<div class="title-page">
    <h2>Sửa chi nhánh</h2>
</div>

<?php if(isset($thongbao)){echo $thongbao;} ?>

<div class="row">
    <form action="sua_cn.php?id=<?=$cn['id']?>" method="post" enctype="multipart/form-data">
        <div class="mb">
            <input type="hidden" name="id" value="<?=$cn['id']?>">
            <label for="">Tên tỉnh</label>
            <br>
            <input type="text" name="ten_tinh" value="<?=$cn['ten_tinh']?>" required placeholder="Tên tỉnh">
        </div>
        <br>
        <div class="mb">
            <label for="">Link google map chi nhánh</label>
            <br>
            <input type="text" name="link" value="<?=$cn['link_map']?>" required placeholder="Link map chi nhánh">
        </div>
        <br>
        <div class="mb">
            <label for="">Địa chỉ</label>
            <br>
            <input type="text" name="dia_chi" value="<?=$cn['dia_chi']?>" required placeholder="Địa chỉ">
        </div>
        <br>
        <div class="mb">
            <label for="">Hotline</label>
            <br>
            <input type="text" name="hotline" value="<?=$cn['hotline']?>" required placeholder="Hotline">
        </div>
        <input type="submit" value="Sửa">
    </form>
</div>

<?php 
require_once 'footeradmin.php';
?>