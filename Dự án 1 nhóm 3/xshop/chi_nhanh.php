<?php  
require_once 'pdo/pdo.php';
require_once 'header.php';

$sql = "SELECT * from chi_nhanh";
$list = pdo_query($sql);

?>

<?php foreach($list as $l): ?>
    <hr>
    <p><?=$l['ten_tinh']?></p>
    <p><?=$l['link_map']?></p>
    <p><?=$l['dia_chi']?></p>
    <p><?=$l['hotline']?></p>
    <hr>
<?php endforeach ?>

<?php
require_once 'footer.php';
?>