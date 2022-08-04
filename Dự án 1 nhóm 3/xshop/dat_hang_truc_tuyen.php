<?php
    include 'header.php';
?>
    <?php
    $servername = "localhost";
    $database = "xshop2";
    $username = "root";
    $password = "";    
    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($conn, "uft8");
    // Check connection
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    } 
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Hướng dẫn mua hàng trực tuyến</title>
</head>
<body>
    <style>
        p{
            font-size: 18px;
            margin-bottom:15px;
        }
        h4{
            font-size: 18px;
            margin-bottom:15px;
        }
        strong{
            font-size: 18px;
            margin-bottom:15px;
        }
        a{
            font-size: 18px;
            margin-bottom:15px;
        }
    </style>
    <div class="container" style="margin: 0 100px">
        <h4>Hướng dẫn đặt hàng</h4>
        <h4>HƯỚNG DẪN MUA HÀNG TẠI HỆ THỐNG CỬA HÀNG THỜI TRANG 4MEN</h4>
        <p>4MEN - hệ thống thời trang nam uy tín hiện đang sở hữu đến 15 chi nhánh, phân bố rộng khắp khu vực Đông Nam Bộ và Tây Nam Bộ. Quý khách hàng khi đến với hệ thống cửa hàng của 4MEN có thể hoàn toàn tin tưởng và hài lòng, từ phong cách và chất lượng sản cho đến thái độ, quy cách của nhân viên luôn được kiểm soát một cách chặt chẽ, đảm bảo quý khách hàng phải được phục vụ một cách chu đáo, chất lượng nhất.
        Ngoài việc tham khảo hoặc liên hệ với 4MEN để được giải đáp mọi vấn đề liên quan đến cửa hàng, sản phẩm,... Quý khách hàng có thể trực tiếp đến Store 4MEN gần nhất để tham gia mua sắm và nhận thêm nhiều ưu đãi hấp dẫn khác.</p>
        <h4>HỆ THỐNG CỬA HÀNG THỜI TRANG 4MEN</h4>
        <?php
                            $sql = "SELECT * FROM chi_nhanh";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            echo '<strong>' . $row['ten_tinh'] . '</strong>';
                            echo '<br>';
                            echo '<a href="'.$row['link_map'].'" id="link" >Chỉ đường</a>';
                            echo '<p>' . 'Địa chỉ: ',$row['dia_chi'] . '</p>';
                            echo '<p>' .'Hotline: ','0', $row['hotline'] . '</p>';
                            }
        ?>
        <h4>HƯỚNG DẪN MUA HÀNG QUA ĐIỆN THOẠI</h4>
        <p>Quý khách vui lòng gọi vào số: 0868.444.644 để cung cấp các thông tin: Mã hàng, size, số lượng, tên, số điện thoại và địa chỉ người nhận hàng. Nhân viên tổng đài 4MEN sẽ tư vấn cách thức đặt hàng dễ dàng và nhanh nhất cho quý khách.</p>
        <h4>HƯỚNG DẪN MUA HÀNG QUA WEBSITE 4MEN</h4>
        <strong>Để mua hàng online qua website 4MEN, quý khách vui lòng làm theo các bước hướng dẫn sau:</strong>
        <strong>Bước đầu tiên:</strong> Tại sản phẩm cần mua, chọn size, chọn số lượng, sau đó:
        - Nhấp vào <strong>ô MUA NGAY</strong> , tiếp tục chuyển qua bước 1:
        <br>    
        <img src="img/20171206_403db50aded604ff243f8b2750b1567f_1512550567 (1).jpg" alt="">
        <br>
        <strong>BƯỚC 1: Nhập thông tin cần thiết</strong>
        <p>- Kiểm tra lại thông tin sản phẩm đặt hàng  (tên sản phẩm, số lượng, size, đơn giá) tại mục 1 ở cột "Giỏ hàng của bạn" bên phải
        <p>- Nhập thông tin liên hệ đầy đủ của người mua tại mục  2</p>
        <p>- Nhập địa chỉ giao hàng tại mục  3</p>
        <p>- Quý khách có thể theo dõi phí vận chuyển (PVC)  phát sinh và tổng tiền thanh toán tại mục * ở cột "Thông tin đơn hàng" bên phải.
        </p>
        <p>- Nhấn chọn GỬI ĐƠN HÀNG tại mục 4 , hoặc mục *</p>
        <img src="img/20171206_3fc4e234e3a6fc3acbc77a93a5f3c7a4_1512550567.jpg" alt="">
        <br>
        <strong>BƯỚC 2: Nhận thông báo gửi đơn hàng</strong>
        <p>- Quý khách sau khi nhấn nút GỬI ĐƠN HÀNG sẽ nhận được thông báo đặt hàng thành công, để mua thêm sản phẩm vui lòng nhấn chọn TIẾP TỤC THAM GIA MUA HÀNG
        </p>
    </div>
</body>
</html>
<?php
    include 'footer.php';
?>