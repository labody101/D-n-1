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
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
    print_r($email);
    $sql = "SELECT * from tai_khoan where email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        $matkhau = $row['pass'];
        $user="$row[user]";
}}
require "PHPMailer-master/src/PHPMailer.php"; 
require "PHPMailer-master/src/SMTP.php"; 
require 'PHPMailer-master/src/Exception.php'; 
$mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
try {
    $mail->SMTPDebug = 0; //0,1,2: chế độ debug
    $mail->isSMTP();  
    $mail->CharSet  = "utf-8";
    $mail->Host = 'smtp.gmail.com';  //SMTP servers
    $mail->SMTPAuth = true; // Enable authentication
    $mail->Username = 'peanut1012100@gmail.com'; // SMTP username
    $mail->Password = 'toilanguoi1';   // SMTP password
    $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
    $mail->Port = 465;  // port to connect to                
    $mail->setFrom('peanut1012100@gmail.com', 'Shop 4Men' ); 
    $mail->addAddress($email, $user); // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = 'Xác nhận mật khẩu';
    $noidungthu = 'Nội dung thư'; 
    $mail->Body = $noidungthu;
    $mail->smtpConnect( array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    ));
    $mail->send();
    echo 'Đã gửi mail xong';
} catch (Exception $e) {
    echo 'Error: ', $mail->ErrorInfo;
}
?>