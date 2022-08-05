<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<?php
include 'header.php';
include 'pdo/pdo.php';

$id = $_GET['id'];
$sql = "SELECT * from bill where id = $id";
$ttdh = pdo_query_one($sql);
$sql = "SELECT * from cart where id_bill = $id";
$ttc = pdo_query($sql); 


?>

<div class="row_cart">
    <div class="ds_cart mb">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>
    <div class="alert alert-success d-flex align-items-center" role="alert" >
        <div>
        <span style="margin-bottom:10px;font-size:30px;"class="iconify" data-icon="twemoji:beaming-face-with-smiling-eyes"></span>
        <span style="font-size:20px;">Cảm ơn quý khách đã đặt hàng</span>
        </div>
    </div>
        
        <br>
        <h3>Thông tin đơn hàng</h3>
        <br>
        
            <li style="text-align=left;">- Mã đơn hàng: Order-<?=$ttdh['id']?> </li>
            <li style="text-align=left;">- Ngày đặt hàng: <?=$ttdh['ngay_dat_hang']?> </li> 
            <li style="text-align=left;">- Tổng đơn hàng: <?=$ttdh['total']?> </li>
            <li style="text-align=left;">- Phương thức thanh toán: <?=$ttdh['bill_pttt']?> </li>
            <li style="text-align=left;">- Địa chỉ giao hàng: <?=$ttdh['bill_address'].' '.$ttdh['reveive_address']?></li>
    </div>
    <div class="ds_cart mb">
    <table class="table table-hover">
                <tr>
                    <th>Mã hàng hóa</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Đơn giá</th>
                </tr>
                <?php $tong = 0;
                $i = 0; ?>
                <?php foreach ($ttc as $c) : ?>
                    <?php $ttien = $c['thanhtien']; ?>
                    <?php $tong += $c['thanhtien']; ?>
                    <tr>
                        <td><?= $c['id_pro'] ?></td>
                        <td><?= $c['namepro'] ?></td>
                        <td><img src="admin/upload_sp/<?= $c['img'] ?>" width="120" alt=""></td>
                        <td><?= $c['soluong'] ?></td>
                        <td><?= $c['thanhtien'] ?> VNĐ</td>
                    </tr>
                    <?php $i += 1 ?>
                <?php endforeach ?>
                <br>
                <th colspan="4">Phí ship</th>
                        <?php
                        if ($ttdh['reveive_address']!="Thành phố Hồ Chí Minh"||$ttdh['reveive_address']!="Thành phố Hà Nội") {
                            $tong += 30000;
                            echo '
                            <td>30000 VND</td>
                            ';
                        }else {
                            $tong +=20000;
                            echo '
                            <td>20000 VND</td>
                            ';
                        }
                        ?>
                <br>
                <tr>
                    <th colspan="4">Tổng đơn hàng</th>
                    <td><?= $tong ?> VNĐ</td>
                </tr>
            </table>
    </div>
</div>

<?php 
include 'footer.php';
?>