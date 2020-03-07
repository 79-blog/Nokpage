<?
ignore_user_abort(true); 
set_time_limit(0);
header("Connection: Close");//通知浏览器关闭
$url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
require_once 'DB.php';
function GetResCode($url)
  {
    $ch = curl_init ();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 200);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_NOBODY, true);//Body就不要了吧，我们只是需要Head
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_exec($ch);
    $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);//取出返回码
    curl_close($ch);//用完记得关掉他
    return $httpCode;
  }
  $mail_error='';
  $result=$_SERVER['medoo']->select("status", "*" );
  foreach ($result as $value) {
    if(GetResCode($value['url'])==200)
    {
      // "UPDATE `Nok_status` SET `all`=`all`+1";
      $_SERVER['medoo']->update("status", ["all[+]" => 1]);
    }else{
      //记录后统一发送
      $_SERVER['medoo']->update("status", ["error[+]" => 1]);
      //array_push($array_error,$value);将结果push进数组
      $mail_error=$mail_error.'服务器故障<br/>URL:'.$value['url'].'</br>';
    }
  }
var_dump($mail_error);
  require 'Mail.php';
  if($mail_error!=''){
    sendmail($_SERVER['config']['mail']['ReceiveMail'],$_SERVER['config']['mail']['ReceiveName'],'出现故障',$mail_error,'咱不支持');
  }
//sleep(30);
//file_get_contents($url);
