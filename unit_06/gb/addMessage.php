<?php
// получаем и обрабатываем имя и текст комментария
$guestName = addslashes(htmlspecialchars($_POST['guestName'], ENT_QUOTES));
$messageText = addslashes(htmlspecialchars($_POST['messageText'], ENT_QUOTES));
// генерируем сегодняшную дату
$date = date("Y.m.d");
 
// если пользователь ввел свое имя и текст сообщения, то добавляем все это в базу данных
if($guestName != "" && $messageText != "")
{
  // соединяемся с базой данных
  $connect = new mysqli('localhost', 'root', '', 'guestbook');
 
  // если запрос выполнен удачно, то выводим собщение "Сообщение отправлено."
  if($connect->query("insert into guestbook values (0, '$guestName', '$messageText', '$date')"))
    echo "<center><a href='../index.php'>Сообщение отправлено.</a></center>";
  // если же при выволнении запроса произошла ошибка, то выводим сообщение о ней
  else
   echo "<center><a href='../index.php'>Произошла ошибка при отправке сообщения. Попробуйте позже.</a></center>";
}
// если пользователь не ввел свое имя или текст сообщения
else
 echo "<center><a href='../index.php'>Нужно заполнить все поля! Вернитесь на главную страницую.</a></center>";
?>