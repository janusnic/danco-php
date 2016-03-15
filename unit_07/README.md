# danco-php

class
=====
Каждое определение класса начинается с ключевого слова class, затем следует имя класса, и далее пара фигурных скобок, которые заключают в себе определение свойств и методов этого класса.

Именем класса может быть любое слово, при условии, что оно не входит в список зарезервированных слов PHP, начинается с буквы или символа подчеркивания и за которым следует любое количество букв, цифр или символов подчеркивания. Если задать эти правила в виде регулярного выражения, то получится следующее выражение: 

  ^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$.

Класс может содержать собственные константы, переменные (называемые свойствами) и функции (называемые методами).

Простое определение класса
--------------------------
    <?php
    class SimpleClass
    {
        // объявление свойства
        public $var = 'значение по умолчанию';

        // объявление метода
        public function displayVar() {
            echo $this->var;
        }
    }
    ?>

Псевдо-переменная $this доступна в том случае, если метод был вызван в контексте объекта. $this является ссылкой на вызываемый объект. Обычно это тот объект, которому принадлежит вызванный метод, но может быть и другой объект, если метод был вызван статически из контекста другого объекта.

Переменная $this
-----------------
    <?php
    class A
    {
        function foo()
        {
            if (isset($this)) {
                echo '$this определена (';
                echo get_class($this);
                echo ")\n";
            } else {
                echo "\$this не определена.\n";
            }
        }
    }

    class B
    {
        function bar()
        {
            // Замечание: следующая строка вызовет предупреждение, если включен параметр E_STRICT.
            A::foo();
        }
    }

    $a = new A();
    $a->foo();

    // Замечание: следующая строка вызовет предупреждение, если включен параметр E_STRICT.
    A::foo();
    $b = new B();
    $b->bar();

    // Замечание: следующая строка вызовет предупреждение, если включен параметр E_STRICT.
    B::bar();
    ?>
Результат выполнения данного примера:

    $this определена (A)
    $this не определена.
    $this определена (B)
    $this не определена.

new
====
Для создания экземпляра класса используется директива new. Новый объект всегда будет создан, за исключением случаев, когда он содержит конструктор, в котором определен вызов исключения в случае ошибки. Рекомендуется определять классы до создания их экземпляров (в некоторых случаях это обязательно).

Если с директивой new используется строка (string), содержащая имя класса, то будет создан новый экземпляр этого класса. Если имя находится в пространстве имен, то оно должно быть задано полностью.

Создание экземпляра класса
--------------------------

    <?php
    $instance = new SimpleClass();

    // Это же можно сделать с помощью переменной:
    $className = 'Foo';
    $instance = new $className(); // Foo()
    ?>

В контексте класса можно создать новый объект через new self и new parent.

Когда происходит присвоение уже существующего экземпляра класса новой переменной, то эта переменная будет указывать на этот же экземпляр класса. Тоже самое происходит и при передаче экземпляра класса в функцию. Копию уже созданного объекта можно создать через ее клонирование.

Присваивание объекта
---------------------

    <?php

    $instance = new SimpleClass();

    $assigned   =  $instance;
    $reference  =& $instance;

    $instance->var = '$assigned будет иметь это значение';

    $instance = null; // $instance и $reference становятся null

    var_dump($instance);
    var_dump($reference);
    var_dump($assigned);
    ?>

Результат выполнения данного примера:

    NULL
    NULL
    object(SimpleClass)#1 (1) {
       ["var"]=>
         string(30) "$assigned будет иметь это значение"
    }

В PHP 5.3.0 введены несколько новых методов создания экземпляров объекта:

Создание новых объектов
------------------------

    <?php
    class Test
    {
        static public function getNew()
        {
            return new static;
        }
    }

    class Child extends Test
    {}

    $obj1 = new Test();
    $obj2 = new $obj1;
    var_dump($obj1 !== $obj2);

    $obj3 = Test::getNew();
    var_dump($obj3 instanceof Test);

    $obj4 = Child::getNew();
    var_dump($obj4 instanceof Child);
    ?>
Результат выполнения данного примера:

    bool(true)
    bool(true)
    bool(true)


Класс Пользователей class user
===============================

Этот класс будет определять каждого пользователя.

Конструктор
-----------
В этом классе мы будем использовать конструктор - это функция, которая автоматически вызывается при создании очередной копии класса. 

dump blog_members
------------------

    CREATE TABLE IF NOT EXISTS `blog_members` (
      `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,
      `username` varchar(255) DEFAULT NULL,
      `password` varchar(255) DEFAULT NULL,
      `email` varchar(255) DEFAULT NULL,
      PRIMARY KEY (`memberID`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


classes/class.user.php
----------------------
    <?php

    class User {

        private $db;
        
        function __construct($db){
            $this->_db = $db;
        }

        public function is_logged_in(){
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                return true;
            }       
        }

        private function get_user_hash($username){  

            try {

                $stmt = $this->_db->prepare('SELECT password FROM blog_members WHERE username = :username');
                $stmt->execute(array('username' => $username));
                
                $row = $stmt->fetch();
                return $row['password'];

            } catch(PDOException $e) {
                echo '<p class="error">'.$e->getMessage().'</p>';
            }
        }

        
        public function login($username,$password){ 

            $hashed = $this->get_user_hash($username);
            
                $_SESSION['loggedin'] = true;
                return true;
        }
        
            
        public function logout(){
            session_destroy();
        }

    }

Автоматическая загрузка классов 
===============================
Большинство разработчиков объектно-ориентированных приложений используют такое соглашение именования файлов, в котором каждый класс хранится в отдельно созданном для него файле. Одной из наиболее при этом досаждающих деталей является необходимость писать в начале каждого скрипта длинный список подгружаемых файлов.

В PHP 5 это делать не обязательно. Можно определить функцию __autoload(), которая будет автоматически вызвана при использовании ранее неопределенного класса или интерфейса. Вызов этой функции - последний шанс для интерпретатора загрузить класс прежде, чем он закончит выполнение скрипта с ошибкой.

Функция __autoload также может использоваться рекурсивно для автоматической загрузки пользовательских классов исключений.

Автоматическая загрузка недоступна в случае использования PHP в командной строке в интерактивном режиме.


Пример автоматической загрузки
-------------------------------
В этом примере функция пытается загрузить классы MyClass1 и MyClass2 из файлов MyClass1.php и MyClass2.php соответственно.

    <?php
    function __autoload($class_name) {
        include $class_name . '.php';
    }

    $obj  = new MyClass1();
    $obj2 = new MyClass2(); 
    ?>

В этом примере представлена попытка загрузки интерфейса ITest.

      <?php

      function __autoload($name) {
          var_dump($name);
      }

      class Foo implements ITest {
      }

      /*
      string(5) "ITest"

      Fatal error: Interface 'ITest' not found in ...
      */
      ?>


В данном примере вызывается исключение и отлавливается блоком try/catch.

      <?php
      function __autoload($name) {
          echo "Want to load $name.\n";
          throw new Exception("Unable to load $name.");
      }

      try {
          $obj = new NonLoadableClass();
      } catch (Exception $e) {
          echo $e->getMessage(), "\n";
      }
      ?>
Результат выполнения данного примера:

      Want to load NonLoadableClass.
      Unable to load NonLoadableClass.

Автоматическая загрузка с перехватом исключения в версиях 5.3.0+ - Класс пользовательского исключения не подгружен

      <?php
      function __autoload($name) {
          echo "Want to load $name.\n";
          throw new MissingException("Unable to load $name.");
      }

      try {
          $obj = new NonLoadableClass();
      } catch (Exception $e) {
          echo $e->getMessage(), "\n";
      }
      ?>

Результат выполнения данного примера:

    Want to load NonLoadableClass.
    Want to load MissingException.

    Fatal error: Class 'MissingException' not found in testMissingException.php on line 4


includes/config.php
--------------------

    <?php
    ob_start();
    session_start();

    //database credentials
    define('DBHOST','localhost');
    define('DBUSER','dev');
    define('DBPASS','ghbdtn');
    define('DBNAME','blog');

    $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //set timezone
    date_default_timezone_set('Europe/Kiev');
    //load classes as needed
    function __autoload($class) {
       
       $class = strtolower($class);

        //if call from within assets adjust the path
       $classpath = 'classes/class.'.$class . '.php';
       if ( file_exists($classpath)) {
          require_once $classpath;
        }   
        
        //if call from within admin adjust the path
       $classpath = '../classes/class.'.$class . '.php';
       if ( file_exists($classpath)) {
          require_once $classpath;
        }
        
        //if call from within admin adjust the path
       $classpath = '../../classes/class.'.$class . '.php';
       if ( file_exists($classpath)) {
          require_once $classpath;
        }       
         
    }
    $user = new User($db); 
    ?>

admin/index.php
----------------
    <?php
    //include config
    require_once('../includes/config.php');

    //if not logged in redirect to login page
    if(!$user->is_logged_in()){ header('Location: login.php'); }

    //show message from add / edit page
    if(isset($_GET['delpost'])){ 

        $stmt = $db->prepare('DELETE FROM blog_posts WHERE postID = :postID') ;
        $stmt->execute(array(':postID' => $_GET['delpost']));

        header('Location: index.php?action=deleted');
        exit;
    } 

    ?>
    <!doctype html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Admin</title>
      <link rel="stylesheet" href="../style/normalize.css">
      <link rel="stylesheet" href="../style/main.css">
      <script language="JavaScript" type="text/javascript">
      function delpost(id, title)
      {
          if (confirm("Are you sure you want to delete '" + title + "'"))
          {
            window.location.href = 'index.php?delpost=' + id;
          }
      }
      </script>
      
    </head>
    <body>

        <div id="wrapper">

        <?php include('menu.php');?>

        <?php 
        //show message from add / edit page
        if(isset($_GET['action'])){ 
            echo '<h3>Post '.$_GET['action'].'.</h3>'; 
        } 
        ?>

        <table>
        <tr>
            <th>Title</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php
            try {

                $stmt = $db->query('SELECT postID, postTitle, postDate FROM blog_posts ORDER BY postID DESC');
                while($row = $stmt->fetch()){
                    
                    echo '<tr>';
                    echo '<td>'.$row['postTitle'].'</td>';
                    echo '<td>'.date('jS M Y', strtotime($row['postDate'])).'</td>';
                    ?>

                    <td>
                        <a href="edit-post.php?id=<?php echo $row['postID'];?>">Edit</a> | 
                        <a href="javascript:delpost('<?php echo $row['postID'];?>','<?php echo $row['postTitle'];?>')">Delete</a>
                    </td>
                    
                    <?php 
                    echo '</tr>';

                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>
        </table>

        <p><a href='/admin/add-post.php'>Add Post</a></p>

    </div>

    </body>
    </html>

admin/login.php
---------------

    <?php
    //include config
    require_once('../includes/config.php');


    //check if already logged in
    //if( $user->is_logged_in() ){ header('Location: index.php'); } 
    ?>
    <!doctype html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Admin Login</title>
      <link rel="stylesheet" href="../style/normalize.css">
      <link rel="stylesheet" href="../style/main.css">
    </head>
    <body>

    <div id="login">

      <?php

      //process login form if submitted
      if(isset($_POST['submit'])){

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if($user->login($username,$password)){ 

          //logged in return to index page
          header('Location: index.php');
          exit;
        

        } else {
          $message = '<p class="error">Wrong username or password</p>';
        }

      }//end if submit

      if(isset($message)){ echo $message; }
      ?>

      <form action="" method="post">
      <p><label>Username</label><input type="text" name="username" value=""  /></p>
      <p><label>Password</label><input type="password" name="password" value=""  /></p>
      <p><label></label><input type="submit" name="submit" value="Login"  /></p>
      </form>

    </div>
    </body>
    </html>


admin/logout.php
-----------------

    <?php
    //include config
    require_once('../includes/config.php');

    //log user out
    $user->logout();
    header('Location: index.php'); 

    ?>

