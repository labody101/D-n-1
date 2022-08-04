<?php
require 'header.php';
?>
<div class="row_gopy">
    <h1>Góp ý</h1>
    <form action="" method="post">
        <label for="">Họ tên*</label>
        <br>
        <input type="text" name="name_gopy" placeholder="Họ tên" required>
        <br>
        <label for="">Số điện thoại*</label>
        <br>
        <input type="text" name="sdt_gopy" placeholder="Số điện thoại" required>
        <br>
        <label for="">Email*</label>
        <br>
        <input type="text" name="email" placeholder="Email" required>
        <br>
        <label for="">Nội dung*</label>
        <br>
        <textarea name="nd_gopy" id="" cols="30" rows="10" placeholder="Nội dung" required></textarea>
        <br>
        <button type="submit" class="btn_search">Gửi</button>
    </form>
</div>

<?php
require 'footer.php';
?>