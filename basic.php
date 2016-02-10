<?php require 'includes/header.php'; ?>
<?php require 'includes/nav.php'; ?>
 
  <main>
   <section>
      <article>
        <h2>Hello World!.</h2>
    
        <?php
        echo "<p><b>Привет</b>, я - скрипт PHP!</p>";
        ?>
      
      </article>
      <article>
      <h2>Пример #1 Пример программирования на PHP</h2>
      <pre>
      &lt;!DOCTYPE HTML&gt;
      &lt;html&gt;
          &lt;head&gt;
              &lt;title&gt;Пример&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
        &lt;?php
        echo "Привет, я - скрипт PHP!";
        ?&gt;
          &lt;/body&gt;
      &lt;/html&gt;

      </pre>
      </article>
      <article>
     <h2>Что такое PHP</h2>
       <p>
       Вместо рутинного вывода HTML-кода командами языка (как это происходит, например, в Perl или C), скрипт PHP содержит HTML с вкраплениями кода. Код PHP отделяется специальными начальным и конечным тегами &lt;?php и ?&gt;, которые позволяют "переключаться" в "PHP-режим" и выходить из него.
       </p>
       <p>PHP отличается от JavaScript тем, что PHP-скрипты выполняются на сервере и генерируют HTML, который посылается клиенту. Если бы у вас на сервере был размещен скрипт, клиент получил бы только результат его выполнения, но не смог бы выяснить, какой именно код его произвел.
       </p>
     </article>

   </section>
   
   <section>
      <article>
        <h2>comment</h2>
    
        <?php
 
          // This is a single-line comment
          # This is also a single-line comment
          /*
          This is a multiple-lines comment block
          that spans over multiple
          lines
          */
          // You can also use comments to leave out parts of a code line
          $x = 5 /* + 15 */ + 5;
          echo $x;

 
        ?>
      
      </article>

    <article>
      <h2>Пример #2 comment</h2>
      <pre>
      &lt;!DOCTYPE HTML&gt;
      &lt;html&gt;
          &lt;head&gt;
              &lt;title&gt;Пример&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
        &lt;?php
        // This is a single-line comment
          # This is also a single-line comment
          /*
          This is a multiple-lines comment block
          that spans over multiple
          lines
          */
          // You can also use comments 
          to leave out parts of a code line
          $x = 5 /* + 15 */ + 5;
          echo $x;

        ?&gt;
          &lt;/body&gt;
      &lt;/html&gt;

      </pre>
    </article>
         <article>
     <h2>комментарии</h2>
       <p>Однострочные комментарии идут только до конца строки или текущего блока PHP-кода, в зависимости от того, что идет перед ними. Это означает, что HTML-код после // ... ?&gt; или # ... ?&gt; БУДЕТ напечатан: ?&gt; завершает режим PHP и возвращает режим HTML, а // или # не могут повлиять на это. Если включена директива asp_tags, то аналогичное поведение будет и с // %&gt; и # %&gt;. 
       </p>
       <p>'C'-комментарии заканчиваются при первой же обнаруженной последовательности */. Убедитесь, что вы не вкладываете друг в друга 'C'-комментарии.
       </p>

     </article>

    
   </section>

   <section>
    <article>
        <h2>echo $value</h2>
    
        <?php
 
          $color = "red";
          echo "My car is " . $color . "<br>";
          // echo "My house is " . $COLOR . "<br>";
          // echo "My boat is " . $coLOR . "<br>";
          $txt = "Hello world!";
          $x = 5;
          $y = 10.5;

          echo $txt;
          echo "<br>";
          echo $x;
          echo "<br>";
          echo $y;
 
        ?>
      
      </article>

    <article>
      <h2>Пример #3 echo $value</h2>
      <pre>
      &lt;!DOCTYPE HTML&gt;
      &lt;html&gt;
          &lt;head&gt;
              &lt;title&gt;Пример&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
        &lt;?php
          
          $color = "red";
          echo "My car is " . $color . "";
          echo "My house is " . $COLOR . "";
          echo "My boat is " . $coLOR . "";
          $txt = "Hello world!";
          $x = 5;
          $y = 10.5;

          echo $txt;
          echo "&lt;br&gt;";
          echo $x;
          echo "&lt;br&gt;";
          echo $y;

        ?&gt;
          &lt;/body&gt;
      &lt;/html&gt;

      </pre>
    </article>
         <article>
     <h2>$value</h2>
       <p>Переменные в PHP представлены знаком доллара с последующим именем переменной. Имя переменной чувствительно к регистру.</p>
       <p>Имена переменных соответствуют тем же правилам, что и остальные наименования в PHP. Правильное имя переменной должно начинаться с буквы или символа подчеркивания и состоять из букв, цифр и символов подчеркивания в любом количестве. Это можно отобразить регулярным выражением: '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*'

       </p>

     </article> 
   </section>
  <section>
    <article>
        <h2>Выражения</h2>
    
        <?php
 
          $x = 5;
          $y = 4;
          echo $x + $y;
          
          $x = 10;
          $y = 6;

          echo $x % $y;
          
          $x = 10;
          $x /= 5;
          echo $x;
          
          $x = 10;
          echo ++$x;

          $x = 10;
          echo $x--;

          $x = 10;
          $y = 6;

          echo $x % $y;
 
        ?>
      
      </article>

    <article>
      <h2>Пример #4 Выражения</h2>
      <pre>
      &lt;!DOCTYPE HTML&gt;
      &lt;html&gt;
          &lt;head&gt;
              &lt;title&gt;Пример&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
        &lt;?php
          
          $x = 5;
          $y = 4;
          echo $x + $y;
          
          $x = 10;
          $y = 6;

          echo $x % $y;
          
          $x = 10;
          $x /= 5;
          echo $x;

          $x = 10;
          echo ++$x;

          $x = 10;
          echo $x--;

          $x = 10;
          $y = 6;

          echo $x % $y;

        ?&gt;
          &lt;/body&gt;
      &lt;/html&gt;

      </pre>
    </article>
         <article>
     <h2>Выражения</h2>
       <p>Основными формами выражений являются константы и переменные. Если вы записываете "$a = 5", вы присваиваете '5' переменной $a. '5', очевидно, имеет значение 5 или, другими словами, '5' это выражение со значением 5 (в данном случае '5' - это целочисленная константа).</p>
       <p>После этого присвоения вы ожидаете, что значением $a также является 5, поэтому, если вы написали $b = $a, вы полагаете, что работать это будет так же, как если бы вы написали $b = 5.</p>

     </article> 
   </section>
  
  <section>
    <article>
        <h2>Выражения</h2>
    
        <?php
 
          $x = 5;
          $y = 4;
          echo $x + $y;
          
          $x = 10;
          $y = 6;

          echo $x % $y;
          
          $x = 10;
          $x /= 5;
          echo $x;
          print "<h2>PHP is Fun!</h2>";
          print "Hello world!<br>";
          print "I'm about to learn PHP!<br>";
          print  $x /= 5;
          echo  "<br>";
          print "$x /= 5 <br>";
          print '$x /= 5';
 
        ?>
      
      </article>

    <article>
      <h2>Пример #5 Выражения</h2>
      <pre>
      &lt;!DOCTYPE HTML&gt;
      &lt;html&gt;
          &lt;head&gt;
              &lt;title&gt;Пример&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
        &lt;?php
          
          $x = 5;
          $y = 4;
          echo $x + $y;
          
          $x = 10;
          $y = 6;

          echo $x % $y;
          
          $x = 10;
          $x /= 5;
          echo $x;
          print "&lt;h2&gt;PHP is Fun!&lt;/h2&gt;";
          print "Hello world!&lt;br&gt;";
          print "I'm about to learn PHP!";
          print  $x /= 5;
          print "$x /= 5";
          print '$x /= 5';
         ?&gt;
          &lt;/body&gt;
      &lt;/html&gt;

      </pre>
    </article>
         <article>
     <h2>Выражения</h2>
       <p>Основными формами выражений являются константы и переменные. Если вы записываете "$a = 5", вы присваиваете '5' переменной $a. '5', очевидно, имеет значение 5 или, другими словами, '5' это выражение со значением 5 (в данном случае '5' - это целочисленная константа).</p>
       <p>После этого присвоения вы ожидаете, что значением $a также является 5, поэтому, если вы написали $b = $a, вы полагаете, что работать это будет так же, как если бы вы написали $b = 5.</p>

     </article> 
   </section>
  
   <section>
    <article>
        <h2>var_dump</h2>
    
        <?php
 
          $x = 5985;
          var_dump($x);

          $x = "Hello world!";
          $x = null;
          var_dump($x);

          $x = 100;
          $y = "100";

          var_dump($x == $y); // returns true because values are equal
          $x = 100;
          $y = "100";

          var_dump($x === $y); // returns false because types are not equal
          $x = 100;
          $y = "100";

          var_dump($x != $y); // returns false because values are equal
          $x = 100;
          $y = "100";

          var_dump($x !== $y); // returns true because types are not equal
          $x = 50;
          $y = 50;

          var_dump($x >= $y); // returns true because $x is greater than or equal to $y
 
        ?>
      
      </article>

    <article>
      <h2>Пример #6 var_dump</h2>
      <pre>
      &lt;!DOCTYPE HTML&gt;
      &lt;html&gt;
          &lt;head&gt;
              &lt;title&gt;Пример&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
        &lt;?php
          
          $x = 5985;
          var_dump($x);
          $x = "Hello world!";
          $x = null;
          var_dump($x);
          $x = 100;
          $y = "100";

          var_dump($x == $y); 
          // returns true because values are equal
          $x = 100;
          $y = "100";

          var_dump($x === $y); 
          // returns false because types are not equal
          
          var_dump($x != $y); 
          // returns false because values are equal
          
          var_dump($x !== $y); 
          // returns true because types are not equal

          $x = 50;
          $y = 50;

          var_dump($x >= $y); 
          // returns true because $x is greater
          // than or equal to $y
         
         ?&gt;
          &lt;/body&gt;
      &lt;/html&gt;

      </pre>
    </article>
         <article>
     <h2>var_dump</h2>
       <p>Функция отображает структурированную информацию об одном или нескольких выражениях, включая их тип и значение. Массивы и объекты анализируются рекурсивно с разным отступом у значений для визуального отображения структуры.</p>
       

     </article> 
  </section>

  <section>
    <article>
        <h2>if else</h2>
    
        <?php
 
       $x = 100;
       $y = 50;

       if ($x == 100 and $y == 50) {
             echo "Hello world!";
       }

      $x = 100;
      $y = 50;

      if ($x == 100 or $y == 80) {
           echo "Hello world!";
      }

      $x = 100;
      $y = 50;

      if ($x == 100 xor $y == 80) {
           echo "Hello world!";
      }

      $x = 100;
      $y = 50;

      if ($x == 100 && $y == 50) {
           echo "Hello world!";
      }

      $a = 5;
      $b = 5;
      
      if ($a > $b) {
          echo "a больше, чем b";
      } elseif ($a == $b) {
          echo "a равен b";
      } else {
          echo "a меньше, чем b";
      }
 
        ?>
      
      </article>

    <article>
      <h2>Пример #7 if  else</h2>
      <pre>
      &lt;!DOCTYPE HTML&gt;
      &lt;html&gt;
          &lt;head&gt;
              &lt;title&gt;Пример&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
        &lt;?php
          
       $x = 100;
       $y = 50;

       if ($x == 100 and $y == 50) {
             echo "Hello world!";
       }

      $x = 100;
      $y = 50;

      if ($x == 100 or $y == 80) {
           echo "Hello world!";
      }

      $x = 100;
      $y = 50;

      if ($x == 100 xor $y == 80) {
           echo "Hello world!";
      }

      x = 100;
      $y = 50;

      if ($x == 100 && $y == 50) {
           echo "Hello world!";
      }

      $a = 5;
      $b = 5;
      
      if ($a > $b) {
          echo "a больше, чем b";
      } elseif ($a == $b) {
          echo "a равен b";
      } else {
          echo "a меньше, чем b";
      }
         
         ?&gt;
          &lt;/body&gt;
      &lt;/html&gt;

      </pre>
    </article>
         <article>
     <h2>if else</h2>
       <p>Конструкция if является одной из наиболее важных во многих языках программирования, в том числе и PHP. Она предоставляет возможность условного выполнения фрагментов кода. Структура if реализована в PHP по аналогии с языком C</p>
       

     </article> 
  </section>

  <section>
    <article>
        <h2>function</h2>
    
        <?php
 
       $makefoo = true;

        /* Мы не можем вызвать функцию foo() в этом месте,
           поскольку она еще не определена, но мы можем 
           обратиться к bar() */

        bar();

        if ($makefoo) {
          function foo()
          {
            echo "Я не существую до тех пор, пока выполнение программы меня не достигнет.\n";
          }
        }

        /* Теперь мы благополучно можем вызывать foo(),
           поскольку $makefoo была интерпретирована как true */

        if ($makefoo) foo();

        function bar() 
        {
          echo "Я существую сразу с начала старта программы.\n";
        }
        ?>
      
      </article>

    <article>
      <h2>Пример #8 function</h2>
      <pre>
      &lt;!DOCTYPE HTML&gt;
      &lt;html&gt;
          &lt;head&gt;
              &lt;title&gt;Пример&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
        &lt;?php
          
    function foo($arg_1, $arg_2, /* ..., */ $arg_n)
    {
      echo "Example function.\n";
      return $retval;
    }

    $makefoo = true;

    /* Мы не можем вызвать функцию foo() в этом месте,
    поскольку она еще не определена, но мы можем 
    обратиться к bar() */

    bar();

    if ($makefoo) {
      function foo()
      {
        echo "Я не существую до тех пор, 
        пока выполнение программы меня не достигнет.\n";
      }
     }

    /* Теперь мы благополучно можем вызывать foo(),
    поскольку $makefoo была интерпретирована как true */

    if ($makefoo) foo();

    function bar() 
    {
      echo "Я существую сразу с начала старта программы.\n";
    }
         
         ?&gt;
          &lt;/body&gt;
      &lt;/html&gt;

      </pre>
    </article>
         <article>
     <h2>Функции, определяемые пользователем</h2>
       <p>Внутри функции можно использовать любой корректный PHP-код, в том числе другие функции и даже объявления классов.</p>
       <p>Имена функций следуют тем же правилам, что и другие метки в PHP. Корректное имя функции начинается с буквы или знака подчеркивания, за которым следует любое количество букв, цифр или знаков подчеркивания. В качестве регулярного выражения оно может быть выражено так: [a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*.</p>
       

     </article> 
  </section>
  
  <section>
    <article>
        <h2>array</h2>
    
<?php
 
// array — Создает массив
$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array);

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

print_r($x);
?>
      
      </article>

    <article>
      <h2>Пример #9 array</h2>
    <pre>
&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Пример&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
&lt;?php
          
// array — Создает массив
$array = array(1, 1, 1, 1,  1, 8 =&gt; 1,  4 =&gt; 1, 19, 3 =&gt; 13);
print_r($array);

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

$x = array("a" =&gt; "red", "b" =&gt; "green");
$y = array("c" =&gt; "blue", "d" =&gt; "yellow");

print_r($x);
?&gt;
    &lt;/body&gt;
&lt;/html&gt;

      </pre>
    </article>
         <article>
     <h2>array — Создает массив</h2>
       <p>Синтаксис "индекс =&gt; значения", разделённые запятыми, определяет индексы и их значения. Индекс может быть строкой или целым числом. Если индекс опущен, будет автоматически сгенерирован числовой индекс, начиная с 0. Если индекс - число, следующим сгенерированным индексом будет число, равное максимальному числовому индексу + 1. Обратите внимание, что если определены два одинаковых индекса, последующий перезапишет предыдущий.
       </p>
       <p>Наличие висячей запятой после последнего элемента массива, несмотря на некоторую необычность, является корректным синтаксисом.</p>
       
     </article> 
  </section>
  </main>

<?php require 'includes/footer.php'; ?>