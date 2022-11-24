<?php
  //print_r($_POST);
  $email = $_POST['email'];
  $message = $_POST['message'];
  $erorr='';
  if (trim($email)=='')
    $erorr='Введите ваш email';
    else if(trim($message)=='')
      $erorr='Введите ваше сообщение';
    else if(strlen($message))
    $message = 'Сообщение должно быть более 10 символов';
    if ($erorr !='') {
      echo $erorr;
      exit;
    }
    $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
    $headers = "From: $email\r\nReply-to:$email\r\nContent-type: text/html;charset=utf-8\r\n";
    mail('admin@itproger.com',$subject,$message, $headers);
    header('Location: /pravila.php');

?>
