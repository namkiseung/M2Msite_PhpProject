<?php
session_start();
require '../../PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer(true);

$mail->IsSMTP();
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $content = $_POST['content']; 
try {

//메일서버나 인증에관련된 내용

    $mail->Host = "smtp.gmail.com";  // 메일서버 주소 

    $mail->SMTPAuth = true; // SMTP 인증을 사용함

    $mail->Port = 465;  // email 보낼때 사용할 포트를 지정

    $mail->SMTPSecure = "ssl";  // SSL을 사용함

    $mail->Username = "rlzld100@gmail.com";  // 계정  [ ??? =gmail 메일주소 @앞부분]

    $mail->Password ="Rla435413."; // 패스워드         [ ??? = gamil 계정 페스워드 ]

    $mail->CharSet = 'utf-8'; 

    $mail->Encoding = "base64";

    

    //실제 메일에 관련된내용

    $mail->From=$email; // 메일보내는사람 메일주소
if(!isset($_SESSION[username])==""){
    $mail->FromName= $_SESSION[username]; //보내는사람 이름
}else{
$mail->FromName= "고객"; //보내는사람 이름
}
$mail->To=$email;
  // 받는사람메일주소 , 받는사람이름  

    $mail->AddAddress("rlzld100@gmail.com", "M2M 문의"); 

    $mail->Subject = $subject; // 메일 제목

    $mail->Body = $content; // 메일 내용

    $mail->Send(); // 실제로 메일을 보냄

} catch (phpmailerException $e) {

    echo $e->errorMessage();

} catch (Exception $e) {

    echo $e->getMessage();

}
?>
<script type="text/javascript">
    alert('성공적으로 발송되었습니다');
window.history.go(-1);
</script>