<?php require 'includes/header.php'; ?>
<?php require 'includes/nav.php'; ?>

  <main>
   <section>
      <article>
        <h2>$_SERVER[] property.</h2>
    
        <?php
          echo $_SERVER['PHP_SELF'];
          echo "<br>";
          echo $_SERVER['SERVER_NAME'];
          echo "<br>";
          echo $_SERVER['HTTP_HOST'];
          echo "<br>";
          echo $_SERVER['HTTP_REFERER'];
          echo "<br>";
          echo $_SERVER['HTTP_USER_AGENT'];
          echo "<br>";
          echo $_SERVER['SCRIPT_NAME'];
        ?>
      
      </article>

      <article>
      <h2>Пример #1 $_SERVER</h2>
    <pre>
&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Пример&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
&lt;?php

      echo $_SERVER['PHP_SELF'];
          
      echo $_SERVER['SERVER_NAME'];
          
      echo $_SERVER['HTTP_HOST'];
          
      echo $_SERVER['HTTP_REFERER'];
          
      echo $_SERVER['HTTP_USER_AGENT'];
          
      echo $_SERVER['SCRIPT_NAME'];          

?&gt;
    &lt;/body&gt;
&lt;/html&gt;

      </pre>
    </article>
    <article>
     <h2>Предопределенные переменные </h2>
       <p>Любому запускаемому скрипту PHP предоставляет большое количество предопределенных переменных. Однако многие из этих переменных не могут быть полностью задокументированы, поскольку они зависят от запускающего скрипт сервера, его версии и настроек, а также других факторов. Некоторые из этих переменных недоступны, когда PHP запущен из командной строки. 
       </p>
       <p>Начиная с PHP 4.2.0, значение директивы register_globals по умолчанию установлено в off (отключено). Положение register_globals в off изменяет набор глобальных предопределенных переменных. Например, чтобы получить DOCUMENT_ROOT, вам необходимо будет использовать $_SERVER['DOCUMENT_ROOT'] вместо $DOCUMENT_ROOT, или $_GET['id'] из URL http://www.example.com/test.php?id=3 вместо $id, или $_ENV['HOME'] вместо $HOME.</p>
       
     </article> 
   </section>
   
   <section>
      <article>
        <h2>PHP_SELF</h2>
     <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
       // collect value of input field
       $name = $_REQUEST['fname'];
       if (empty($name)) {
           echo "Name is empty";
       } else {
           echo $name;
       }
    }
  ?>
      
      </article>

      <article>
      <h2>Пример #2 PHP_SELF</h2>
    <pre>
&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Пример&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
&lt;?php

      if ($_SERVER["REQUEST_METHOD"] == "GET") {
       // collect value of input field
       $name = $_REQUEST['fname'];
       if (empty($name)) {
           echo "Name is empty";
       } else {
           echo $name;
       }
    }
?&gt;
    &lt;/body&gt;
&lt;/html&gt;

      </pre>
    </article>
    <article>
     <h2>PHP_SELF</h2>
       <p>Имя файла скрипта, который сейчас выполняется, относительно корня документов. Например,$_SERVER['PHP_SELF'] в скрипте по адресу http://example.com/foo/bar.php будет /foo/bar.php. Константа __FILE__ содержит полный путь и имя файла текущего (то есть подключенного) файла. Если PHP запущен в командной строке, эта переменная содержит имя скрипта, начиная с PHP 4.3.0.
       </p>
       
       
     </article> 
   </section>
   <section>
      <article>
        <h2>$_GET</h2>
     <form action="welcome.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
     </form>
     
      </article>

      <article>
      <h2>Пример #3 $_GET</h2>
    <pre>
&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Пример&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;

Welcome &lt;??php echo $_GET["name"]; ??&gt;&lt;?phpbr?&gt;
Your email address is: &lt;?php?php echo $_GET["email"]; ??&gt;
    

    &lt;/body&gt;
&lt;/html&gt;

      </pre>
    </article>
    <article>
     <h2>$_GET</h2>
       <p>Имя файла скрипта, который сейчас выполняется, относительно корня документов. Например,$_SERVER['PHP_SELF'] в скрипте по адресу http://example.com/foo/bar.php будет /foo/bar.php. Константа __FILE__ содержит полный путь и имя файла текущего (то есть подключенного) файла. Если PHP запущен в командной строке, эта переменная содержит имя скрипта, начиная с PHP 4.3.0.
       </p>
       
       
     </article> 
   </section>
   
  </main>

<?php require 'includes/footer.php'; ?>