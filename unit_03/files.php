<?php require 'includes/header.php'; ?>
<?php require 'includes/nav.php'; ?>

  <main>
   <section>
      <article>
     <h2>Открытие файлового манипулятора процесса</h2>
<?php
// Открыть файл "spices.txt" для записи
$fh = fopen("spices.txt","w");
// Добавить несколько строк текста
fputs($fh, "Parsley, sage, rosemary\n");
fputs($fh, "Paprika, salt, pepper\n");
fputs($fh, "Basil, sage, ginger\n");
// Закрыть манипулятор
fclose($fh);
// Открыть процесс UNIX grep для поиска слова Basil в файле spices.txt
$fh - popen("grep Basil < spices.txt", "r");
// Вывести результат работы grep
fpassthru($fh);

?>

      </article>

      <article>
      <h2>Пример #1 popen </h2>
    <pre>
// Открыть файл "spices.txt" для записи
$fh = fopen("spices.txt","w");
// Добавить несколько строк текста
fputs($fh, "Parsley, sage, rosemary\n");
fputs($fh, "Paprika, salt, pepper\n");
fputs($fh, "Basil, sage, ginger\n");
// Закрыть манипулятор
fclose($fh);
// Открыть процесс UNIX grep для поиска слова Basil в файле spices.txt
$fh - popen("grep Basil < spices.txt", "r");
// Вывести результат работы grep
fpassthru($fh);
      </pre>
    </article>
    
   </section>

   <section>
      <article>

        <h2>Открытие соединения через сокет</h2>
 <?php
function getthehost($host,$path) { 
  // Открыть подключение к узлу 
  $fp = fsockopen($host, 80); 
  // Перейти в блокирующий режим 
  socket_set_blocking($fp, 1); 
  // Отправить заголовки 
  fputs($fp,"GET $path HTTP/1.1\r\n"); 
  fputs ($fp, "Host: $host\r\n\r\n"); 
  $x = 1; 
  // Получить заголовки 
  while($x < 10): 
    $headers = fgets ($fp, 4096); 
    print $headers; 
    $x++; 
  endwhile; 
  // Закрыть манипулятор 
  fclose($fp); 
  } 
  getthehost("www.ukr.net", "/");

  ?>

      </article>

      <article>
      <h2>Пример #2 fsockopen</h2>
    <pre>
function getthehost($host,$path) { 
  // Открыть подключение к узлу 
  $fp = fsockopen($host, 80); 
  // Перейти в блокирующий режим 
  socket_set_blocking($fp, 1); 
  // Отправить заголовки 
  fputs($fp,"GET $path HTTP/1.1\r\n"); 
  fputs ($fp, "Host: $host\r\n\r\n"); 
  $x = 1; 
  // Получить заголовки 
  while($x < 10): 
    $headers = fgets ($fp, 4096); 
    print $headers; 
    $x++; 
  endwhile; 
  // Закрыть манипулятор 
  fclose($fp); 
  } 
getthehost("www.ukr.net", "/");
      </pre>
    </article>
    
   </section>
   <section>
      <article>
        <h2>Запуск внешних программ</h2>
 
exec("ping -c 5 www.php.net", $ping); 
// В Windows - exec("ping -n 5 www.php.net. $ping); 

for ($i=0; $i< count($ping);$i++): 
  print "<br>$ping[$i]"; 
endfor;

      </article>

      <article>
      <h2>Пример #3 Поиск в тексте</h2>
    <pre>
 
exec("ping -c 5 www.php.net", $ping); 
// В Windows - exec("ping -n 5 www.php.net. $ping); 

for ($i=0; $i< count($ping);$i++): 
  print "<br>$ping[$i]"; 
endfor;

</pre>
PING php-web2.php.net (72.52.91.14) 56(84) bytes of data.

--- php-web2.php.net ping statistics ---
5 packets transmitted, 0 received, 100% packet loss, time 4032ms

    </article>

   </section>

   <section>
      <article>
        <h2>Работа с файловой системой</h2>
<?php
$file = "datafile.txt";
list($dev, $inode, $inodep, $nlink, $uid, $gid, $inodev, $size, $atime, $mtime, $ctime,
$bsize) = stat($file);
print "$file is $size bytes. <br>";
print "Last access time: $atime <br>";
print "Last modification time: $mtime <br>";

?>
      </article>
      <article>
      <h2>Пример #4 Работа с файловой системой</h2>
    <pre>
$file = "datafile.txt";
list($dev, $inode, $inodep, $nlink, $uid, $gid, $inodev, $size, $atime, $mtime, $ctime,
$bsize) = stat($file);
print "$file is $size bytes. ";
print "Last access time: $atime ";
print "Last modification time: $mtime";

</pre>

    </article>

   </section>
   <section>
      <article>
        <h2>Отображение и изменение характеристик файлов</h2>
<?php        
chmod("data_file.txt", 0766); // Работает  
?>
      </article>
      <article>
      <h2>Пример #5 Отображение и изменение характеристик файлов</h2>
    <pre>
chmod("data_file.txt", g+r); // He работает
chmod("data_file.txt", 766); // Не работает
chmod("data_file.txt", 0766); // Работает
  </pre>


    </article>

   </section>

   <section>
      <article>
        <h2>Копирование и переименование файлов</h2>
<?php
$data_file = "datal.txt";
copy($data_file. $data_file'.bak') or die("Could not copy $data_file");
?>
      </article>
      <article>
      <h2>Пример #6 Копирование и переименование файлов</h2>
    <pre>
$data_file = "datal.txt";
copy($data_file. $data_file'.bak') or die("Could not copy $data_file");
  </pre>

    </article>

   </section>

   <section>
      <article>
        <h2>Удаление файлов</h2>
<?php
system ("del filename.txt");
?>
      </article>
      <article>
      <h2>Пример #7 Удаление файлов</h2>
    <pre>
system ("del filename.txt");
  </pre>


    </article>

   </section>

   <section>
      <article>
        <h2>Работа с каталогами</h2>
<?php
$dh = opendir('.' );
while ($file = readdir($dh)) :
print "$file <br>"; endwhile;
closedir($dh);
?>
      </article>
      <article>
      <h2>Пример #8 Работа с каталогами</h2>
    <pre>
$dh = opendir('.');
while ($file = readdir($dh)) :
print "$file <br>"; endwhile;
closedir($dh);
  </pre>

    </article>

   </section>

   <section>
      <article>
        <h2>простой счетчик обращений</h2>
<?php
// Сценарий: простой счетчик обращений
// Назначение: сохранение количества обращений в файле
$access = "hits.txt"; // Имя файла выбирается произвольно
$visits = @file($access); // Прочитать содержимое файла в масссив
$current_visitors = $visits[0]; // Извлечь первый (и единственный) элемент
++$current_visitors; // Увеличить счетчик обращений
$fh = fopen($access, "w"); // Открыть файл hits.txt и установить
// указатель текущей позиции в начало файла
@fwrite($fh, $current_visitors);// Записать новое значение счетчика
// в файл "hits.txt"
fclose($fh);  // Закрыть манипулятор файла "hits.txt"
?>
      </article>
      <article>
      <h2>Пример #9 простой счетчик обращений</h2>
    <pre>
// Сценарий: простой счетчик обращений
// Назначение: сохранение количества обращений в файле
$access = "hits.txt"; // Имя файла выбирается произвольно
$visits = @file($access); // Прочитать содержимое файла в масссив
$current_visitors = $visits[0]; // Извлечь первый (и единственный) элемент
++$current_visitors; // Увеличить счетчик обращений
$fh = fopen($access, "w"); // Открыть файл hits.txt и установить
// указатель текущей позиции в начало файла
@fwrite($fh, $current_visitors);// Записать новое значение счетчика
// в файл "hits.txt"
fclose($fh);  // Закрыть манипулятор файла "hits.txt"
  </pre>

    </article>

   </section>

   <section>
      <article>
        <h2>Запись в файл информации о посещении страницы</h2>

      </article>
      <article>
      <h2>Пример #10 Запись в файл информации о посещении страницы</h2>
    <pre>

  </pre>

    </article>

   </section>

  </main>

<?php require 'includes/footer.php'; ?>
