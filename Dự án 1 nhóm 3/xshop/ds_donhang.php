<?php
include 'header.php';
include 'pdo/pdo.php';
if (isset($_SESSION['user'])) {
    $id = $_SESSION['user']['ma_kh'];
    $sql = "SELECT * from bill where id_user = $id";
    $list_b = pdo_query($sql);
    
    function get_ttdh($n)
    {
        switch ($n) {
            case 0:
                $tt = "Đơn hàng mới";
                break;
            case 1:
                $tt = "Đang xử lí";
                break;
            case 2:
                $tt = "Đang giao hàng";
                break;
            case 3:
                $tt = "Hoàn tất";
                break;
    
            default:
                $tt = "Đơn hàng mới";
                break;
        }
        return $tt;
    }
    
    function loadall_count($idbill)
    {
        $sql = "SELECT * from cart where id_bill = $idbill";
        $bill = pdo_query($sql);
        return sizeof($bill);
    }
} else {
    echo '<script>alert("Bạn chưa đăng nhập!Vui lòng đăng nhập hoặc đăng kí");</script>';
    echo '<script>window.location="cart.php";</script>';
}
?>
<div class="row_cart">
    <div class="cart">
        <table>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt</th>
                <th>Số lượng mặt hàng</th>
                <th>Tổng giá trị đơn hàng</th>
                <th>Tình trạng đơn hàng</th>
            </tr>
            <?php if (is_array($list_b)) { ?>
                <?php foreach ($list_b as $lb) : ?>
                    <?php $ttdh = get_ttdh($lb['bill_status']); ?>
                    <?php $slsp = loadall_count($lb['id']); ?>
                    <tr>
                        <td><?= $lb['id'] ?></td>
                        <td><?= $lb['ngay_dat_hang'] ?></td>
                        <td><?= $slsp ?></td>
                        <td><?= $lb['total'] ?></td>
                        <td><?= $ttdh ?></td>
                    </tr>
                <?php endforeach ?>
            <?php } else { ?>
                <?php $ttdh = get_ttdh($lb['bill_status']); ?>
                <?php $slsp = loadall_count($list_b['id']); ?>
                <tr>
                    <td><?= $lb['id'] ?></td>
                    <td><?= $lb['ngay_dat_hang'] ?></td>
                    <td><?= $slsp ?></td>
                    <td><?= $lb['total'] ?></td>
                    <td><?= $ttdh ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </div>
<?php
include 'footer.php';
?>