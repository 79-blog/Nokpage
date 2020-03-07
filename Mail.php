<?
/*
该处代码未完善
*/
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
require_once 'DB.php';
require './PHPMailer/src/Exception.php'; 
require './PHPMailer/src/PHPMailer.php'; 
require './PHPMailer/src/SMTP.php'; 
function sendmail($readdress, $rename,$tittle,$body,$altbody){
    $mail = new PHPMailer(true); // Passing `true` enables exceptions 
    $mail->CharSet =$_SERVER['config']["mail"]['CharSet']; //设定邮件编码 
    $mail->SMTPDebug = $_SERVER['config']["mail"]['STMPDebug']; // 调试模式输出
    $mail->isSMTP(); // 使用SMTP 
    $mail->Host = $_SERVER['config']["mail"]['Host']; // SMTP服务器 
    $mail->SMTPAuth = $_SERVER['config']["mail"]['SMTPAuth']; // 允许 SMTP 认证 
    $mail->Username = $_SERVER['config']["mail"]['Username']; // SMTP 用户名 即邮箱的用户名 
    $mail->Password = $_SERVER['config']["mail"]['Password']; // SMTP 密码 部分邮箱是授权码(例如163邮箱) 
    $mail->SMTPSecure = $_SERVER['config']["mail"]['SMTPSecure']; // 允许 TLS 或者ssl协议 
    $mail->Port = $_SERVER['config']["mail"]['Port']; // 服务器端口 25 或者465 具体要看邮箱服务器支持 

    $mail->setFrom($_SERVER['config']["mail"]['FromMail'], $_SERVER['config']["mail"]['FromName']); //发件人 
    $mail->addAddress($readdress, $rename); // 收件人 
    //$mail->addAddress('ellen@example.com'); // 可添加多个收件人 
    //$mail->addReplyTo('xxxx@163.com', 'info'); //回复的时候回复给哪个邮箱 建议和发件人一致 
    //$mail->addCC('cc@example.com'); //抄送 
    //$mail->addBCC('bcc@example.com'); //密送 


    $mail->isHTML(true); // 是否以HTML文档格式发送 发送后客户端可直接显示对应HTML内容 
    $mail->Subject = $tittle ; 
    $mail->Body = $body; 
    $mail->AltBody = $altbody; 
    $mail->send(); 
  }