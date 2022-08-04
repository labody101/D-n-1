<?php
include 'headeradmin.php';
include '../pdo/pdo.php';

function loadall_thongke()
{
    $sql = "SELECT loai.ma_loai, loai.ten_loai, count(hang_hoa.ma_hh) as countsp, min(hang_hoa.don_gia) as minprice, max(hang_hoa.don_gia) as maxprice, avg(hang_hoa.don_gia) as avgprice";
    $sql .= " from hang_hoa left join loai on loai.ma_loai = hang_hoa.ma_loai";
    $sql .= " group by loai.ma_loai order by loai.ma_loai desc";
    $list_tk = pdo_query($sql);
    return $list_tk;
}
$list_tk = loadall_thongke();



?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="piechart"></div>

<div class="row_tk">
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([

                ['Danh mục', 'Số lượng sản phẩm'],
                <?php $tongdm = count($list_tk); ?>
                <?php $i = 1; ?>
                <?php foreach ($list_tk as $lkt) : ?>
                    <?php if ($i == $tongdm) $dauphay = "";
                    else $dauphay = ","; ?>['<?= $lkt['ten_loai'] ?>', <?= $lkt['countsp'] ?>] <?= $dauphay ?>
                    <?php $i += 1; ?>
                <?php endforeach ?>

            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'Biểu đồ danh mục từng loại hàng',
                'width': 550,
                'height': 400
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</div>


<?php
include 'footeradmin.php';
?>