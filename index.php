<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
<form class='form' method="post" action="mail.php">
 
 <div class="form-wrapper rigth">
	<label for="form-name_id">Имя:</label>
	<input id='form-name_id' class='form-name' maxlength="30" type="text" name="name" placeholder='Введите имя' required>

	<label for="form-tel_id">Телефон:</label>
	<input id='form-tel_id' class='form-tel' type="tel" pattern="\+7\-[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}" name="phone" placeholder='Введите номер' required>

	<label for="form-mail_id">E-mail:</label>
	<input id='form-mail_id'  class='form-mail' maxlength="30" type="text" name="mail" placeholder='Введите почту' required>
 </div>

 <div class="form-wrapper left">
	<label for="form-message_id">Сообщение:</label>
	<textarea id='form-message_id' class='form-message' name="message" placeholder='Введите сообщение' ></textarea>

	<input class='btn' type="submit" value="Отправить">
 </div>

</form>
</body>
</html>