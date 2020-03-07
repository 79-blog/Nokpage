<?
/*
$config['db']配置按照medoo配置即可
*/
$config['db']['database_type'] = 'mysql';
$config['db']['database_name'] = 'fggksf549';
$config['db']['server'] = 'localhost';
$config['db']['username'] = 'fggksf549';
$config['db']['password'] = 'epBfmXDaTxfB';
$config['db']['charset'] = 'utf8';
$config['db']['port'] = 3306;
$config['db']['prefix'] = 'Nok_';
$config['db']['logging'] = true;
$config['mail']['CharSet'] ="UTF-8"; //设定邮件编码 
$config['mail']['SMTPDebug'] = 0; // 调试模式输出 
$config['mail']['Host'] = 'smtp.qq.com'; // SMTP服务器 
$config['mail']['SMTPAuth'] = true; // 允许 SMTP 认证 
$config['mail']['Username'] = '946735494@qq.com'; // SMTP 用户名 即邮箱的用户名 
$config['mail']['Password'] = 'gpxwkyarnbribeaj'; // SMTP 密码 部分邮箱是授权码(例如163邮箱) 
$config['mail']['SMTPSecure'] = 'ssl'; // 允许 TLS 或者ssl协议 
$config['mail']['Port'] = 465; // 服务器端口 25 或者465 具体要看邮箱服务器支持 
$config['mail']['FromMail']="946735494@qq.com";//发件人邮箱
$config['mail']['FromName']="乔千";//发件人
$config['mail']['ReceiveMail']="anlcde@163.com";//收件人
$config['mail']['ReceiveName']="乔千";//收件人

//下面为debug内容
//setFrom('946735494@qq.com', 'Mailer'); //发件人 
//addAddress('anlcde@163.com', '乔千'); // 收件人 
//addAddress('ellen@example.com'); // 可添加多个收件人 
//addReplyTo('xxxx@163.com', 'info'); //回复的时候回复给哪个邮箱 建议和发件人一致 
//addCC('cc@example.com'); //抄送 
//addBCC('bcc@example.com'); //密送 
