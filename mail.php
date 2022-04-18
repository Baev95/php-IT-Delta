<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   <title>Ваше сообщение успешно отправлено</title>
   <link rel="stylesheet" href="./style.css">
</head>
 
<body class='body-mail'>
 
<?php
   $back = "<p class='back'><a  href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail']) 
   and !empty($_POST['message'])){
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $mail = $_POST['mail'];
      $message = $_POST['message'];

      mail('prog@it-delta.ru', 'Письмо с адрес_вашего_сайта', 
		'Вам написал отправитель: '.$name.' |   Номер отправителя: '.$phone.' |   Почта отправителя: '.$mail.'  |  Сообщение отправителя: '.$message, 
		"Content-type:text/html;charset=windows-1251");
 
      echo "<p class='text-mail'>Ваше сообщение успешно отправлено!<br> Вы получите ответ в 
      ближайшее время<br> </p>$back";
 
      exit;
   } 
   else {
      echo "<p class='text-mail'> Для отправки сообщения заполните все поля! </p>$back";
      exit;
   }
?>
</body>
</html>