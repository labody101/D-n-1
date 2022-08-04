<?php
require 'header.php';
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/Gioithieu.css">
    <div class="c1">
            </div>
            <div class="text">
            <h4>Giới thiệu 4MEN</h4>
                <div class="typed-out-1">
                    <p>Thương hiệu thời trang nam 4MEN được thành lập từ tháng 3 năm 2010, là thương hiệu thời trang uy tín hàng đầu tại Việt Nam dành riêng cho phái mạnh.</p>
                </div>
                <div class="typed-out-2">
                    <h5>SỨ MỆNH</h5>
                </div>
                <div class="typed-out-3">
                    <p>Không ngừng sáng tạo và tỉ mỉ từ công đoạn sản xuất đến các khâu dịch vụ, nhằm mang đến cho Quý Khách Hàng những trải nghiệm mua sắm đặc biệt nhất:</p>
                </div>
                <div class="typed-out-4">
                    <p>sản phẩm chất lượng - dịch vụ hoàn hảo - xu hướng thời trang mới mẻ và tinh tế. Thông qua các sản phẩm thời trang, 4MEN luôn mong muốn truyền tải</p>
               </div>
                <div class="typed-out-5">
                    <p>đến bạn những thông điệp tốt đẹp cùng với nguồn cảm hứng trẻ trung và tích cực.</p>
                </div>
                <div class="typed-out-6">
                    <h5>TẦM NHÌN</h5>
                </div>
                <div class="typed-out-7">
                    <p>Với mục tiêu xây dựng và phát triển những giá trị bền vững, trong 10 năm tới, 4MEN sẽ trở thành thương hiệu dẫn đầu về thời trang phái mạnh trên thị trường Việt Nam.</p>
                </div>
                <div class="typed-out-8">
                    <h5>THÔNG ĐIỆP 4MEN GỬI ĐẾN BẠN</h5>
                </div>
                <div class="typed-out-9">
                    <p>4MEN muốn truyền cảm hứng tích cực đến các chàng trai: Việc mặc đẹp rất quan trọng, nó thể hiện được cá tính, sự tự tin và cả một phần lối sống, cách</p>
                </div>
                <div class="typed-out-10">
                    <p>suy nghĩ của bản thân. Mặc thanh lịch, sống thanh lịch.</p>
                </div>
                <div class="typed-out-11">
                    <h6 style="font-weight:bold">Chọn 4MEN, bạn đang lựa chọn sự hoàn hảo cho điểm nhấn thời trang của chính mình</h6>
                </div>
    </div>
    <br>
    <br>
    <div class="content_gth">
        <div class="map">
            <h4 style="font-weight:bold">HỆ THỐNG CỬA HÀNG</h4>
            <br>
            <iframe src="https://www.google.com/maps/d/embed?mid=1BowIrqL4VKWRHsW-85aSugpzcrY&ehbc=2E312F" width="940" height="500"></iframe>
        </div>
        <div class="list_map" >
            <h4 style="font-weight:bold">TÌM CỬA HÀNG</h4>
                <br>
            <form action="Gioithieu.php" method="post">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Chọn tỉnh thành</option>
                    <?php
                    $sql="SELECT ten_tinh FROM chi_nhanh";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $ten_tinh=$row['ten_tinh'] ;
                        echo '<option value="'.$ten_tinh.'" name="ten_tinh">'.$ten_tinh.'</option>';
                    }
                    ?>
                </select>
            </form>
            <br>
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
        </div>
    </div>
<?php
require 'footer.php';
?>