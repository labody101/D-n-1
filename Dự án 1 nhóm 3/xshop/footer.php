<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail_ntb = $_POST['mail_ntb'];
    if (strlen($mail_ntb) > 0) {
        $sql = "INSERT into mail_ntb(mail) VALUES ('$mail_ntb')";
        pdo_execute($sql);
        $thongbao = "Chúc mừng bạn đăng ký thành công";
    }
    else{
        $thongbao="Có lỗi xảy ra";
    }
}

?>
<!-- footer -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<body>
<div class="footer-content">
    <div class="col">
        <li id="icon" style="text-align:left"><div class="logof"><a href="index.php"><img src="img/xshop.png" alt="logo"></a></div></li>
        <br>
        <li id="text"><a href="Gioithieu.php"><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Giới thiệu</a></li>
        <li id="text"><a href="lienhe.php"><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Liên hệ</a></li>
        <li id="text"><a href="gopy"><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Góp ý</a></li>
        <li id="text"><a href=""><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Tin tức</a></li>
        <li id="text"><span class="iconify" data-icon="carbon:email" style="color: #bbb;font-size: 20px;"></span><span style="color: #bbb"> Email:</span><a id="contact" href="info@4menshop.com">info@4menshop.com</a></li>
        <li id="text"><span class="iconify" data-icon="carbon:phone" style="color: #bbb; font-size: 20px;"></span><span style="color: #bbb"> Hotline:0868444644</span><br><br>
        <p style="color: #bbb">Đăng kí email khuyến mãi:</p>
        <li><?php if(isset($thongbao)){
            echo '<span style="color:#b31f2a">'.$thongbao.'</span>';
        } ?>
        <form action="" method="post">
        <input style="height: 40px;weight:250px;border-radius:0;padding=0;border:0;margin:0;background-color:#343434" type="email" name="mail_ntb" placeholder="Email của bạn"><button id="btn_register_mail" type="submit">Đăng kí</button>
        </form></li>
    </div>
    <div class="col">
        <li style="color:#fff;">HỖ TRỢ KHÁCH HÀNG</li>
        <br>
        <li id="text"><a href="dat_hang_truc_tuyen.php"><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Hướng dẫn đặt hàng</a></li>
        <li id="text"><a href="huong_dan_chon_size.php"><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Hướng dẫn chọn size</a></li>
        <li id="text"><a href="cau_hoi_thuong_gap.php"><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Câu hỏi thường gặp</a></li>
        <li id="text"><a href="chinh_sach_khach_vip.php"><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Chính sách khách VIP</a></li>
        <li id="text"><a href=""><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Thanh toán-giao hàng</a></li>
        <li id="text"><a href=""><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Chính sách đổi hàng</a></li>
        <li id="text"><a href=""><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Chinh sách bảo mật</a></li>
        <li id="text"><a href=""><span class="iconify" data-icon="ep:d-arrow-right" style="color: #bbb; font-size: 15px;padding-bottom:2px"></span>Chính sách cookie</a></li>
    </div>
    <div class="col">
        <li style="color:#fff;">HỆ THỐNG CỬA HÀNG</li><br>
        <li><iframe src="https://www.google.com/maps/d/embed?mid=1BowIrqL4VKWRHsW-85aSugpzcrY&ehbc=2E312F" width="291.2" height="193.6"></iframe></li>
        <li id="text"><a href="gioithieu.php">Tìm địa chỉ cửa hàng gần bạn >></a></li>
    </div>
    <div class="col">
        <li style="color:#fff;">KẾT NỐI VỚI CHÚNG TÔI</li><br>
        <li><div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/4men.com.vn/" data-width="320" data-height="202" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=291&amp;height=202&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2F4men.com.vn%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=320"><span style="vertical-align: bottom; width: 291px; height: 130px;"><iframe name="f2cdf7f33303c58" width="320px" height="202px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfdivlscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.4/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfc38fcc25e9244%26domain%3D4menshop.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252F4menshop.com%252Ff14682419d39dec%26relation%3Dparent.parent&amp;container_width=291&amp;height=202&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2F4men.com.vn%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=320" style="border: none; visibility: visible; width: 291px; height: 130px;" class=""></iframe></span></div></li>
        <div class="icon">
            <a href="https://www.facebook.com/4men.com.vn"><span id="icon" class="iconify" data-icon="line-md:facebook" style="color: #699bf7; font-size: 35px;"></span></a>
            <a href="https://www.youtube.com/channel/UC_ak8Gw7sytkZOLkL6XRmKA"><span id="icon" class="iconify" data-icon="icon-park-twotone:youtube" style="color: #699bf7; font-size: 35px;"></span></a>
            <a href="https://www.instagram.com/4men.stores/"><span id="icon" class="iconify" data-icon="line-md:instagram" style="color: #699bf7; font-size: 35px;"></span></a>
        </div>
    </div>
</div>
<div class="footer_end" style="background-color:#131313">
    <div class="tt">
        <p>Copyright 2022 · Thiết kế và phát triển bởi 4MEN SHOP All rights reserved</p>
        <p>Chủ quản: ông Nguyễn Ngọc Năm.</p>
        <p>MST cá nhân: 0312028096</p>
        <p>Số ĐKKD: 41G8031109 do UBND Quận 7 - Tp.HCM cấp ngày 05/06/2017</p>
        <p style="color:red">Nhãn hiệu "4MEN" đã được đăng kí độc quyền tại Cục sở hữu trí tuệ Việt Nam</p>
    </div>
    <a href="http://online.gov.vn/Home/WebDetails/1239?AspxAutoDetectCookieSupport=1"><img src="img/icon-dangky_ed795de8b131419393b256f6384de715.png" alt=""></a>
</div>
</body>
</html>