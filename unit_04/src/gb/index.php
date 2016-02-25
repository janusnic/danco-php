<!doctype html>
<meta charset='utf-8'>
<body>

<div style="width: 600px; margin: 0 auto;">
  <form action="/gb/addMessage.php" method="post">
  Ваше имя:<br />
  <input type="text" name="guestName" placeholder="Ваше имя" style="width: 100%;"><br /><br />
  Ваше 2 имя:<br />
  <input type="text" name="guestSName" placeholder="Ваше 2 имя" style="width: 100%;"><br /><br />
  Ваш email:<br />
  <input type="text" name="guestEmail" placeholder="Ваш Email" style="width: 100%;"><br /><br />
 
  Текст вашей записи в гостевой книге:<br />
  <textarea name="messageText" placeholder="Текст сообщения" style="width: 100%; height: 100px;">
  </textarea><br /><br />
 
  <input type="submit" value="Оставить сообщение в гостевой книге!" style="width: 100%;">
  </form>
 
  <?php
  // подключаемся к нашей базе данных
  $connect = new mysqli('localhost', 'dev', 'ghbdtn', 'test');
  // получаем список всех сообщений
  $result = $connect->query("select * from guest");
  // вычисляем количество полученных записей
  $countMessage = $result->num_rows;
 
  // если количество записей в базе данных больше 0, то выводим их
  if($countMessage > 0)
  {
    // просматриваем весь массив полученных данных
    for($i = 0; $i < $countMessage; $i++)
    {
      echo '<div style="border: 1px solid green;">';
      // извлекаем данные
      $message = $result->fetch_object();
 
      // выводим в нужной нам форме
      echo "<b>".$message->firstname.' '.$message->lastname." </b>";
      
      echo "<b>".$message->email." </b><br />";
      echo $message->message_text."<br />";
      echo "Дата: ".$message->reg_date."<br />";
      echo '</div><br />';
    }
  }
  ?>
</div>
</body>