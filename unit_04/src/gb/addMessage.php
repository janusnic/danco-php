<!doctype html>
<meta charset='utf-8'>
<body>

<?php
// получаем и обрабатываем имя и текст комментария
$guestName = addslashes(htmlspecialchars($_POST['guestName'], ENT_QUOTES));
$guestSName = addslashes(htmlspecialchars($_POST['guestSName'], ENT_QUOTES));
$guestEmail = addslashes(htmlspecialchars($_POST['guestEmail'], ENT_QUOTES));
$messageText = addslashes(htmlspecialchars($_POST['messageText'], ENT_QUOTES));
// генерируем сегодняшную дату
$date = date("Y.m.d");
 
// если пользователь ввел свое имя и текст сообщения, то добавляем все это в базу данных
if($guestName != "" && $messageText != "")
{
  // соединяемся с базой данных
  $connect = new mysqli('localhost', 'dev', 'ghbdtn', 'test');
 
  // если запрос выполнен удачно, то выводим собщение "Сообщение отправлено."
  if($connect->query("insert into guest (firstname,lastname,email,message_text) values ('$guestName','$guestSName','$guestEmail', '$messageText')"))
    echo "<center><a href='/gb/index.php'>Сообщение отправлено.</a></center>";
  // если же при выволнении запроса произошла ошибка, то выводим сообщение о ней
  else
   echo "<center><a href='/gb/index.php'>Произошла ошибка при отправке сообщения. Попробуйте позже.</a></center>";
}
// если пользователь не ввел свое имя или текст сообщения
else
 echo "<center><a href='/gb/index.php'>Нужно заполнить все поля! Вернитесь на главную страницую.</a></center>";
?>
</body>