<?php require 'includes/header.php'; ?>
<?php require 'includes/nav.php'; ?>

  <main>
   <section>
      <article>
        <h2>Проверка существования и размера файла</h2>
        <?php
if (! file_exists ($filename)) :
print "File $filename does not exist!";
endif:
        ?>
      </article>

      <article>
     <h2>Пример #1 проверки существования файла:</h2>
      <pre>
if (! file_exists ($filename)) :
print "File $filename does not exist!";
endif:
      </pre>
    </article>


   </section>

   <section>
      <article>
        <h2>is_file()</h2>

        <?php
$file = "somefile.txt";
if (is_file($file)) :
print "The file $file is valid and exists!";
else :
print "The file $file does not exist or it is not a valid file!";
endif: ?>

      </article>

    <article>
      <h2>Пример #2 is_file($file)</h2>
      <pre>
$file = "somefile.txt";
if (is_file($file)) :
print "The file $file is valid and exists!";
else :
print "The file $file does not exist or it is not a valid file!";
endif:
      </pre>
    </article>

   </section>

   <section>
    <article>
        <h2>Функция filesize</h2>

        <?php

        $fs = filesize("pastry.txt"); 
        print "Pastry.txt is $fs bytes.";
        ?>

      </article>

    <article>
      <h2>Пример #3 Функция filesize </h2>
      <pre>

  $fs = filesize("pastry.txt"); 
  print "Pastry.txt is $fs bytes.";

      </pre>
    </article>
   </section>

  <section>
    <article>
        <h2>Открытие и закрытие файлов</h2>

        <?php
       $file = "userdata.txt"; // Некоторый файл
$fh = fopen($file, "a+") or die("File ($file) does not exist!");
        ?>

      </article>

    <article>
      <h2>Пример #4 Функция fopen</h2>
      <pre>
$file = "userdata.txt"; // Некоторый файл
$fh = fopen($file, "a+") 
      or die("File ($file) does not exist!");
      </pre>
    </article>

   </section>

  <section>
    <article>
        <h2>Функция fclose</h2>

        <?php
        $file = "userdata.txt";
if (file_exists($file)) :
$fh = fopen($file, "r");
// Выполнить операции с файлом
fclose($fh);
else :
print "File Sfile does not exist!";
endif;

        ?>

      </article>

    <article>
      <h2>Пример #5 fclose</h2>
      <pre>

$file = "userdata.txt";
if (file_exists($file)) :
$fh = fopen($file, "r");
// Выполнить операции с файлом
fclose($fh);
else :
print "File Sfile does not exist!";
endif;
      </pre>
    </article>

   </section>

  <section>
    <article>
        <h2>Запись в файл</h2>

        <?php
// Информация о трафике на пользовательском сайте
$data = "08:13:00|12:37:12|208.247.106.187|Win98";
$filename = "somefile.txt";
// Если файл существует и в него возможна запись
if ( is_writeable($filename) ) :
// Открыть файл и установить указатель текущей позиции в конец файла
$fh = fopen($filename, "a+");
// Записать содержимое $data в файл
$ success - fwrite($fh, $data);
// Закрыть файл
fclose($fh); else :
print "Could not open Sfilename for writing";
endif;
        ?>

      </article>

    <article>
      <h2>Пример #6 fwrite</h2>
      <pre>

// Информация о трафике на пользовательском сайте
$data = "08:13:00|12:37:12|208.247.106.187|Win98";
$filename = "somefile.txt";
// Если файл существует и в него возможна запись
if ( is_writeable($filename) ) :
// Открыть файл и установить указатель текущей позиции в конец файла
$fh = fopen($filename, "a+");
// Записать содержимое $data в файл
$ success - fwrite($fh, $data);
// Закрыть файл
fclose($fh); else :
print "Could not open Sfilename for writing";
endif;
      </pre>
    </article>

   </section>


     <section>
    <article>
        <h2>Функция fputs</h2>

        <?php
// Информация о трафике на пользовательском сайте
$data = "08:13:00|12:37:12|208.247.106.187|Win98";
$filename = "somefile.txt";
// Если файл существует и в него возможна запись
if ( is_writeable($filename) ) :
// Открыть файл и установить указатель текущей позиции в конец файла
$fh = fopen($filename, "a+");
// Записать содержимое $data в файл
$ success - fputs($fh, $data);
// Закрыть файл
fclose($fh); else :
print "Could not open Sfilename for writing";
endif;

        ?>

      </article>

    <article>
      <h2>Пример #7 fputs</h2>
      <pre>

// Информация о трафике на пользовательском сайте
$data = "08:13:00|12:37:12|208.247.106.187|Win98";
$filename = "somefile.txt";
// Если файл существует и в него возможна запись
if ( is_writeable($filename) ) :
// Открыть файл и установить указатель текущей позиции в конец файла
$fh = fopen($filename, "a+");
// Записать содержимое $data в файл
$ success - fputs($fh, $data);
// Закрыть файл
fclose($fh); else :
print "Could not open Sfilename for writing";
endif;

      </pre>
    </article>

   </section>

     <section>
    <article>
        <h2>Чтение из файла</h2>

        <?php
$filename = "somefile.txt";
if ( is_readable($filename) ) :
// Открыть файл и установить указатель текущей позиции в конец файла
$fh = fopen($filename, "r");
else :
print "$filename is not readable!";
endif;
        ?>

      </article>

    <article>
      <h2>Пример #8 is_readable</h2>
      <pre>
$filename = "somefile.txt";
if ( is_readable($filename) ) :
// Открыть файл и установить указатель текущей позиции в конец файла
$fh = fopen($filename, "r");
else :
print "$filename is not readable!";
endif;
      </pre>
    </article>

   </section>

     <section>
    <article>
        <h2>Функция fread</h2>

        <?php
$fh = fopen('pastry.txt', "r") or die("Can't open file!");
$file = fread($fh, filesize($fh));
print $file;
fclose($fh);

        ?>

      </article>

    <article>
      <h2>Пример #9 fclose</h2>
      <pre>

$fh = fopen('pastry.txt', "r") or die("Can't open file!");
$file = fread($fh, filesize($fh));
print $file;
fclose($fh);

pastry.txt:

Recipe: Pastry Dough
1 1/4 cups all-purpose flour
3/4 stick (6 tablespoons) unsalted butter, chopped
2 tablespoons vegetable shortening 1/4 teaspoon salt
3 tablespoons water
      </pre>
    </article>

   </section>

     <section>
    <article>
        <h2>Функция fgetc</h2>

        <?php
$fh = fopen("pastry.txt", "r"); while (! feof($fh)) :
$char = fgetc($fh):
print $char; endwhile;
fclose($fh);

        ?>

      </article>

    <article>
      <h2>Пример #10 fgetc</h2>
      <pre>

$fh = fopen("pastry.txt", "r"); while (! feof($fh)) :
$char = fgetc($fh):
print $char; endwhile;
fclose($fh);
      </pre>
    </article>

   </section>
     <section>
    <article>
        <h2>Функция fgets</h2>

        <?php
$fh = fopen("pastry.txt", "r");
while (! feof($fh));
$line = fgets($fh, 4096);
print $line. "<br>";
endwhile;
fclose($fh):
        ?>

      </article>

    <article>
      <h2>Пример #11 fgets</h2>
      <pre>
$fh = fopen("pastry.txt", "r");
while (! feof($fh));
$line = fgets($fh, 4096);
print $line. "<br>";
endwhile;
fclose($fh):
      </pre>
    </article>

   </section>
<section>
    <article>
        <h2>Функция fgetss</h2>

        <?php
$fh = fopen("science.html", "r");
while (! feof($fh)) :
print fgetss($fh, 2048);
endwhile;
fclose($fh);
        ?>

      </article>

    <article>
      <h2>Пример #12 fgetss</h2>
      <pre>
$fh = fopen("science.html", "r");
while (! feof($fh)) :
print fgetss($fh, 2048);
endwhile;
fclose($fh);

science.html
<html>
<head>
<title>Breaking News - Science</title>
<body>
<h1>Alien lifeform discovered</h1><br>
<b>August 20. 2000</b><br>
Early this morning, a strange new form of fungus was found growing in the closet of W. J. Gilmore's old apartment refrigerator. It is not known if powerful radiation emanating from the tenant's computer monitor aided in this evolution.
</body>
</html>

      </pre>
    </article>

   </section>

   <section>
    <article>
        <h2>Выборочное удаление тегов из файла HTML</h2>

<?php
$fh = fopenC'science.html', "r");
$allowable = "<br>";
while (! feof($fh)) :
print fgetss($fh. 2048, $allowable);
endwhile;
fclose($fh);
?>

      </article>

    <article>
      <h2>Пример #13 fgetss</h2>
      <pre>
$fh = fopenC'science.html', "r");
$allowable = "&lt;br&gt;";
while (! feof($fh)) :
print fgetss($fh. 2048, $allowable);
endwhile;
fclose($fh);
      </pre>
    </article>

   </section>

      <section>
    <article>
        <h2>Чтение файла в массив</h2>

<?php
$file_array = file( "pastry.txt" );
while ( list( $line_num, $line ) = each($file_array ) ):
print "<b>Line $line_num:</b> ". htmlspecialchars($line )."<br>\n"
endwhile;
?>

      </article>

    <article>
      <h2>Пример #14 Чтение файла в массив</h2>
      <pre>
$file_array = file( "pastry.txt" );
while ( list( $line_num, $line ) = each($file_array ) ):
print "Line $line_num: ". htmlspecialchars($line )."\n"
endwhile;
      </pre>
    </article>

   </section>

         <section>
    <article>
        <h2>Перенаправление файла в стандартный выходной поток</h2>

<?php
$restaurant_file = "latorre.txt";
// Направить весь файл в стандартный выходной поток
readfile($restaurant_filе);
?>

      </article>

    <article>
      <h2>Пример #15 Перенаправление файла в стандартный выходной поток</h2>
      <pre>
$restaurant_file = "latorre.txt";
// Направить весь файл в стандартный выходной поток
readfile($restaurant_filе);
      </pre>
    </article>

   </section>
  </main>

<?php require 'includes/footer.php'; ?>
