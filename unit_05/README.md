# danco-php
dbase blog
----------
db.sql
-------
```
-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 29, 2016 at 05:12 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_members`
--

CREATE TABLE IF NOT EXISTS `blog_members` (
  `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blog_members`
--

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'Demo', '$2y$10$wJxa1Wm0rtS2BzqKnoCPd.7QQzgu7D/aLlMR5Aw3O.m9jx3oRJ5R2', 'demo@demo.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `postDesc` text CHARACTER SET utf8,
  `postCont` text CHARACTER SET utf8,
  `postDate` datetime DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`) VALUES
(1, 'Bendless Love', '<p>That''s right, baby. I ain''t your loverboy Flexo, the guy you love so much. You even love anyone pretending to be him! Interesting. No, wait, the other thing: tedious. Hey, guess what you''re accessories to. The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate.</p>', '<h2>The Mutants Are Revolting</h2>\r\n<p>We don''t have a brig. And until then, I can never die? We need rest. The spirit is willing, but the flesh is spongy and bruised. And yet you haven''t said what I told you to say! How can any of us trust you?</p>\r\n<ul>\r\n<li>Oh, but you can. But you may have to metaphorically make a deal with the devil. And by "devil", I mean Robot Devil. And by "metaphorically", I mean get your coat.</li>\r\n<li>Bender?! You stole the atom.</li>\r\n<li>I was having the most wonderful dream. Except you were there, and you were there, and you were there!</li>\r\n</ul>\r\n<h3>The Series Has Landed</h3>\r\n<p>Fry! Stay back! He''s too powerful! No. We''re on the top. Fry, you can''t just sit here in the dark listening to classical music.</p>\r\n<h4>Future Stock</h4>\r\n<p>Does anybody else feel jealous and aroused and worried? We''re also Santa Claus! You''re going back for the Countess, aren''t you? Well, let''s just dump it in the sewer and say we delivered it.</p>\r\n<ol>\r\n<li>Spare me your space age technobabble, Attila the Hun!</li>\r\n<li>You guys realize you live in a sewer, right?</li>\r\n<li>I guess if you want children beaten, you have to do it yourself.</li>\r\n<li>Yeah. Give a little credit to our public schools.</li>\r\n</ol>\r\n<h5>The Why of Fry</h5>\r\n<p>Who are you, my warranty?! Shinier than yours, meatbag. Dr. Zoidberg, that doesn''t make sense. But, okay! Yes, except the Dave Matthews Band doesn''t rock.</p>', '2013-05-29 00:00:00'),
(2, 'That Darn Katz!', '<p>Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. Fry, you can''t just sit here in the dark listening to classical music. And yet you haven''t said what I told you to say! How can any of us trust you?</p>', '<h2>Xmas Story</h2>\r\n<p>It must be wonderful. Does anybody else feel jealous and aroused and worried? Is today''s hectic lifestyle making you tense and impatient? Soothe us with sweet lies. That''s right, baby. I ain''t your loverboy Flexo, the guy you love so much. You even love anyone pretending to be him!</p>\r\n<ul>\r\n<li>Goodbye, friends. I never thought I''d die like this. But I always really hoped.</li>\r\n<li>They''re like sex, except I''m having them!</li>\r\n<li>Come, Comrade Bender! We must take to the streets!</li>\r\n</ul>\r\n<h3>Anthology of Interest I</h3>\r\n<p>Hey, whatcha watching? They''re like sex, except I''m having them! Well I''da done better, but it''s plum hard pleading a case while awaiting trial for that there incompetence. Yes, except the Dave Matthews Band doesn''t rock. I suppose I could part with ''one'' and still be feared&hellip;</p>\r\n<h4>Teenage Mutant Leela''s Hurdles</h4>\r\n<p>Oh, but you can. But you may have to metaphorically make a deal with the devil. And by "devil", I mean Robot Devil. And by "metaphorically", I mean get your coat. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file! It''s a T. It goes "tuh". I guess if you want children beaten, you have to do it yourself.</p>\r\n<ol>\r\n<li>Spare me your space age technobabble, Attila the Hun!</li>\r\n<li>Well, thanks to the Internet, I''m now bored with sex. Is there a place on the web that panders to my lust for violence?</li>\r\n</ol>\r\n<h5>The Farnsworth Parabox</h5>\r\n<p>Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. We need rest. The spirit is willing, but the flesh is spongy and bruised. It must be wonderful.</p>', '2013-06-05 23:10:35'),
(3, 'How Hermes Requisitioned His Groove Back', '<p>You''re going back for the Countess, aren''t you? Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. Now Fry, it''s been a few years since medical school, so remind me. Disemboweling in your species: fatal or non-fatal? I don''t want to be rescued. Leela, are you alright? You got wanged on the head.</p>', '<h2>The Luck of the Fryrish</h2>\r\n<p>Professor, make a woman out of me. I am the man with no name, Zapp Brannigan! Good man. Nixon''s pro-war and pro-family. The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate. Fry, you can''t just sit here in the dark listening to classical music.</p>\r\n<ul>\r\n<li>Who are those horrible orange men?</li>\r\n<li>Is today''s hectic lifestyle making you tense and impatient?</li>\r\n</ul>\r\n<h3>Lethal Inspection</h3>\r\n<p>Oh, but you can. But you may have to metaphorically make a deal with the devil. And by "devil", I mean Robot Devil. And by "metaphorically", I mean get your coat. No. We''re on the top. Does anybody else feel jealous and aroused and worried? Well I''da done better, but it''s plum hard pleading a case while awaiting trial for that there incompetence. It must be wonderful.</p>\r\n<h4>Where No Fan Has Gone Before</h4>\r\n<p>Who are those horrible orange men? Bender, we''re trying our best. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file! Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. WINDMILLS DO NOT WORK THAT WAY! GOOD NIGHT! Look, last night was a mistake.</p>\r\n<ol>\r\n<li>I''m sorry, guys. I never meant to hurt you. Just to destroy everything you ever believed in.</li>\r\n<li>Stop it, stop it. It''s fine. I will ''destroy'' you!</li>\r\n<li>You guys realize you live in a sewer, right?</li>\r\n</ol>\r\n<h5>Fear of a Bot Planet</h5>\r\n<p>Why yes! Thanks for noticing. Hey, guess what you''re accessories to. Yes, except the Dave Matthews Band doesn''t rock. Take me to your leader! Daddy Bender, we''re hungry.</p>', '2013-06-05 23:20:24'),
(6, 'The Cyber House Rules', '<p>You guys realize you live in a sewer, right? Uh, is the puppy mechanical in any way? Come, Comrade Bender! We must take to the streets! I daresay that Fry has discovered the smelliest object in the known universe! Good news, everyone! There''s a report on TV with some very bad news!</p>', '<h2>The Luck of the Fryrish</h2>\r\n<p>Professor, make a woman out of me. I am the man with no name, Zapp Brannigan! Good man. Nixon''s pro-war and pro-family. The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate. Fry, you can''t just sit here in the dark listening to classical music.</p>\r\n<ul>\r\n<li>Who are those horrible orange men?</li>\r\n<li>Is today''s hectic lifestyle making you tense and impatient?</li>\r\n</ul>\r\n<h3>Lethal Inspection</h3>\r\n<p>Oh, but you can. But you may have to metaphorically make a deal with the devil. And by "devil", I mean Robot Devil. And by "metaphorically", I mean get your coat. No. We''re on the top. Does anybody else feel jealous and aroused and worried? Well I''da done better, but it''s plum hard pleading a case while awaiting trial for that there incompetence. It must be wonderful.</p>\r\n<h4>Where No Fan Has Gone Before</h4>\r\n<p>Who are those horrible orange men? Bender, we''re trying our best. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file! Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. WINDMILLS DO NOT WORK THAT WAY! GOOD NIGHT! Look, last night was a mistake.</p>\r\n<ol>\r\n<li>I''m sorry, guys. I never meant to hurt you. Just to destroy everything you ever believed in.</li>\r\n<li>Stop it, stop it. It''s fine. I will ''destroy'' you!</li>\r\n<li>You guys realize you live in a sewer, right?</li>\r\n</ol>\r\n<h5>Fear of a Bot Planet</h5>\r\n<p>Why yes! Thanks for noticing. Hey, guess what you''re accessories to. Yes, except the Dave Matthews Band doesn''t rock. Take me to your leader! Daddy Bender, we''re hungry.</p>', '2013-06-06 08:28:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```
ob_start
=========
Эта функция включает буферизацию вывода. Если буферизация вывода активна, вывод скрипта не высылается (кроме заголовков), а сохраняется во внутреннем буфере.

Содержимое этого внутреннего буфера может быть скопировано в строковую переменную, используя ob_get_contents(). Для вывода содержимого внутреннего буфера следует использовать ob_end_flush(). В качестве альтернативы можно использовать ob_end_clean() для уничтожения содержимого буфера.

Некоторые web-сервера (например Apache) изменяют рабочую директорию скрипта, когда вызывается callback-функция. Вы можете вернуть ее назад, используя chdir(dirname($_SERVER['SCRIPT_FILENAME'])) в callback-функции.
Буферы вывода помещаются в стек, то есть допускается вызов ob_start() после вызова другой активной ob_start(). При этом необходимо вызывать ob_end_flush() соответствующее количество раз. Если активны несколько callback-функций, вывод последовательно фильтруется для каждой из них в порядке вложения.

Пример callback-функции, определенной пользователем
---------------------------------------------------

```
<?php

function callback($buffer)
{
  // заменить все яблоки апельсинами
  return (str_replace("яблоки", "апельсины", $buffer));
}

ob_start("callback");

?>
<html>
<body>
<p>Это все равно что сравнить яблоки и апельсины.</p>
</body>
</html>
<?php

ob_end_flush();

?>

```
Результат выполнения данного примера:
```
<html>
<body>
<p>Это все равно что сравнить апельсины и апельсины.</p>
</body>
</html>
```
Создание нестираемого буфера вывода с совместимостью с версиями PHP 5.3 и 5.4
```
<?php

if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
  ob_start(null, 0, PHP_OUTPUT_HANDLER_STDFLAGS ^
    PHP_OUTPUT_HANDLER_REMOVABLE);
} else {
  ob_start(null, 0, false);
}

?>
```

config.php
----------
```
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
date_default_timezone_set('Europe/London');


?>
```
Сессии session_start
====================

веб-сервер не поддерживает постоянного соединения с клиентом, и каждый запрос обрабатывается, как новый, безо всякой связи с предыдущими. То есть, нельзя ни отследить запросы от одного и того же посетителя, ни сохранить для него переменные между просмотрами отдельных страниц. 
Сессии - это механизм, позволяющий однозначно идентифицировать браузер и создающий для этого браузера файл на сервере, в котором хранятся переменные сеанса. 
Это корзина покупок в е-магазине, авторизация, защита интерактивных частей сайта от спама.
Start a PHP Session
-------------------
Example1
```
// Start the session To use cookie-based sessions, session_start() must be called before outputing anything to the browser. 
session_start(); ?> 
<!DOCTYPE html> <html> <body> <?php 
// Set session variables 
$_SESSION["favcolor"] = "green"; 
$_SESSION["favanimal"] = "cat"; 
$_SESSION['time']     = time(); 
echo "Session variables are set."; 
// Get PHP Session Variable Values
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>"; 
echo "Favorite animal is " . $_SESSION["favanimal"] . "."; 
print_r($_SESSION); 
// to change a session variable, just overwrite it 
$_SESSION["favcolor"] = "yellow"; 
print_r($_SESSION); 
```
При запросе скрипта смотрим, пришла ли кука с определенным именем. Если куки нет, то ставим ее и записываем в базу новую строку с данными пользователя. Если кука есть, то читаем из базы данные. Еще одним запросом удаляем из базы старые записи и вот у нас готов механизм сессий. Совсем несложно. Но есть некоторые нюансы, которые делают предпочтительным использование именно встроенного механизма сессий.
Массив $_SESSION
----------------
В нем находятся переменные, которые мы ходим сделать доступными в различных скриптах. Чтобы поместить переменную в сессию, достаточно присвоить ее элементу массива $_SESSION.

Пример 2.php
-------------
```
session_start();
if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";
echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить"; 
```
Мы проверяем, есть ли у нас в сессии переменная counter, если нет, то создаем ее со значением 0, а дальше выводим ее значение и увеличиваем на единицу. Увеличенное значение запишется в сессию, и при следующем вызове скрипта переменная будет иметь значение 1, и так далее.

Для начала надо как-то идентифицировать браузер. Для этого надо выдать ему уникальный идентификатор и попросить передавать его с каждым запросом.
Идентификатор - это обычная переменная. По умолчанию ее имя - PHPSESSID.
Задача PHP отправить ее браузеру, чтобы тот вернул ее со следующим запросом. переменную можно передать только двумя способами: в куках или POST/GET запросом.
PHP использует оба варианта.

За это отвечают две настройки в php.ini:
-----------------------------------------
- session.use_cookies - если равно 1, то PHP передает идентификатор в куках, если 0 - то нет.
- session.use_trans_sid если равно 1, то PHP передает его, добавляя к URL и формам, если 0 - то нет.
Менять эти и другие параметры сессий можно так же, как и другие настройки PHP - в файле php.ini, а так же с помощью команды ini_set() или в файлах настройки веб-сервера

Если включена только первая, то при старте сессии (при каждом вызове session_start()) клиенту устанавливается кука. Браузер при каждом следующем запросе эту куку возвращает и PHP имеет идентификатор сессии. Проблемы начинаются, если браузер куки не возвращает. В этом случае, не получая куки с идентификатором, PHP будет все время стартовать новую сессию, и механизм работать не будет.

Если включена только вторая, то кука не выставляется. После того, как скрипт выполняет свою работу, и страница полностью сформирована, PHP просматривает ее всю и дописывает к каждой ссылке и к каждой форме передачу идентификатора сессии. Это выглядит примерно так:
```
<a href="/index.php">Index</a> превращается в 
<a href="/index.php?PHPSESSID=9ebca8bd62c830d3e79272b4f585ff8f">Index</a>
```
а к формам добавляется скрытое поле
```
<input type="hidden" name="PHPSESSID" value="00196c1c1a02e4c37ac04f921f4a5eec" />
```
И браузер при клике на любую ссылку, или при нажатии на кнопку в форме, пошлет в запросе нужную нам переменную - идентификатор сессии! По очевидным причинам идентификатор добавляется только к относительным ссылкам.

По умолчанию в последних версиях PHP включены обе опции. Как PHP поступает в этом случае? Кука выставляется всегда. А ссылки автодополняются только если РНР не обнаружил куку с идентификатором сессии. Когда пользователь в првый раз за этот сеанс заходит на сайт, ему ставится кука, и дополняются ссылки. При следующем запросе, если куки поддерживаются, PHP видит куку и перестает дополнять ссылки. Если куки не работают, то PHP продолжает исправно добавлять ид к ссылкам, и сессия не теряется. Пользователи, у которых работают куки, увидят длинную ссылку с ид только один раз.

3.php
-----
```
<?php session_start(); 
echo 'Welcome to page #1'; 
$_SESSION['favcolor'] = 'green'; 
$_SESSION['animal']   = 'cat'; 
$_SESSION['time']     = time(); 
// Works if session cookie was accepted 
echo '<br /><a href="page.php">page SID</a>'; 
// Or maybe pass along the session id, if needed 
echo '<br /><a href="page.php?' . SID . '">page SID</a>'.'<br>'; 
print_r($_SESSION); ?> 
```
page.php 
```
<?php 
// page.php 
ini_set('display_errors',1); 
error_reporting(E_ALL); 
session_start(); 
echo 'Welcome to page #2<br />'; 
echo $_SESSION['favcolor'].'<br>'; // green 
echo $_SESSION['animal'].'<br>';   // cat 
echo date('Y m d H:i:s', $_SESSION['time']).'<br>'; 
/* set the session name to WebsiteID */ 
$previous_name = session_name("WebsiteID"); 
echo "The previous session name was $previous_name<br />"; 
if (!isset($_SESSION['counter'])) $_SESSION['counter']=0; 
echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз.<br> 
<a href=".$_SERVER['PHP_SELF'].'?'.session_name().'='.session_id().">обновить</a>"; 
 // You may want to use SID here, like we did in 3.php 
echo '<br /><a href="3.php">page 3</a>';
```
Для того, чтобы иметь доступ к переменным сессии на любых страницах сайта, надо написать ТОЛЬКО ОДНУ(!) строчку в самом начале КАЖДОГО файла, в котором нам нужны сессии:
```
session_start();
```
И далее обращаться к элементам массива $_SESSION. Например, проверка авторизации будет выглядеть примерно так:
```
session_start();
if ($_SESSION['authorized']<>1) {
header("Location: /auth.php");
exit;
}
```
Класс PDO 
=========
Представляет соединение между PHP и сервером базы данных.

Подключения и Управление подключениями 
--------------------------------------
Соединения устанавливаются автоматически при создании объекта PDO от его базового класса. Не имеет значения, какой драйвер вы хотите использовать; все что требуется, это имя базового класса. Конструктор класса принимает аргументы для задания источника данных (DSN), а также необязательные имя пользователя и пароль (если есть).

Пример #1 Подключение к MySQL
```
<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
?>
```
В случае ошибки при подключении будет выброшено исключение PDOException. Его можно перехватить и обработать, либо оставить на откуп глобальному обработчику ошибок, который вы задали функцией set_exception_handler().

Пример #2 Обработка ошибок подключения
```
<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
```

Если ваше приложение не перехватывает исключение PDO конструктора, движок zend выполнит стандартные операции для завершения работы скрипта и вывода обратной трассировки. В этой трассировке будет содержаться детальная информация о соединении с базой данных, включая имя пользователя и пароль. Ответственность за перехват исключений лежит на вас. Перехватить исключение можно явно (с помощью выражения catch), либо неявно, задав глобальный обработчик ошибок функцией set_exception_handler().
При успешном подключении к базе данных в скрипт будет возвращен созданный PDO объект. Соединение остается активным на протяжении всего времени жизни объекта. Чтобы закрыть соединение, необходимо уничтожить объект путем удаления всех ссылок на него (этого можно добиться, присваивая NULL всем переменным, указывающим на объект). Если не сделать этого явно, PHP автоматически закроет соединение по окончании работы скрипта.

Пример #3 Закрытие соединения
```
<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
// здесь мы каким-то образом используем соединение


// соединение больше не нужно, закрываем
$dbh = null;
?>
```
Во многих приложениях может оказаться полезным использование постоянных соединений к базам данных. Постоянные соединения не закрываются при завершении работы скрипта, они кэшируются и используются повторно, когда другой скрипт запрашивает соединение с теми же учетными данными. Постоянные соединения позволяют избежать создания новых подключений каждый раз, когда требуется обмен данными с базой, что в результате дает прирост скорости работы таких приложений.

Пример #4 Постоянные соединения
```
<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass, array(
    PDO::ATTR_PERSISTENT => true
));
?>
```
Чтобы использовать постоянные соединения, необходимо добавить константу PDO::ATTR_PERSISTENT в массив параметров драйвера, который передается конструктору PDO. Если просто задать этот атрибут функцией PDO::setAttribute() уже после создания объекта, драйвер не будет использовать постоянные соединения.

Если вы используете PDO ODBC драйвер и ваши ODBC библиотеки поддерживают объединение подключений в пул (ODBC Connection Pooling) (unixODBC и Windows точно поддерживают, но могут быть и другие), то рекомендуется вместо постоянных соединений пользоваться этим пулом. Пул подключений ODBC доступен всем модулям текущего процесса; если PDO сам кэширует соединение, то это соединение будет недоступно другим модулям и не попадет в пул. В результате каждый модуль будет создавать дополнительные подключения для своих нужд.

PDO::query
===========
Выполняет SQL запрос и возвращает результирующий набор в виде объекта PDOStatement
```
public PDOStatement PDO::query ( string $statement )
public PDOStatement PDO::query ( string $statement , int $PDO::FETCH_COLUMN , int $colno )
public PDOStatement PDO::query ( string $statement , int $PDO::FETCH_CLASS , string $classname , array $ctorargs )

public PDOStatement PDO::query ( string $statement , int $PDO::FETCH_INTO , object $object )
```
PDO::query() выполняет SQL запрос без подготовки и возвращает результирующий набор (если есть) в виде объекта PDOStatement.

Если запрос будет запускаться многократно, для улучшения производительности приложения имеет смысл этот запрос один раз подготовить методом PDO::prepare(), а затем запускать на выполнение методом PDOStatement::execute() столько раз, сколько потребуется.

Если после выполнения предыдущего запроса вы не выбрали все данные из результирующего набора, следующий вызов PDO::query() может потерпеть неудачу. В таких случаях следует вызывать метод PDOStatement::closeCursor(), который освободит ресурсы базы данных занятые предыдущим объектом PDOStatement. После этого можно безопасно вызывать PDO::query().

statement
----------
Текст SQL запроса для подготовки и выполнения.

Данные в запросе должны быть правильно экранированы.

Возвращаемые значения 
----------------------
PDO::query() возвращает объект PDOStatement или FALSE, если запрос выполнить не удалось.


Пример #1 Демонстрация работы PDO::query
----------------------------------------
После выполнения SELECT запроса можно сразу работать с результирующим набором посредством курсора.
```
<?php
function getFruit($conn) {
    $sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
    foreach ($conn->query($sql) as $row) {
        print $row['name'] . "\t";
        print $row['color'] . "\t";
        print $row['calories'] . "\n";
    }
}
?>
```
Результат выполнения данного примера:
```
apple   red     150
banana  yellow  250
kiwi    brown   75
lemon   yellow  25
orange  orange  300
pear    green   150
watermelon      pink    90
```

index.php
---------
```
<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

    <div id="wrapper">

        <h1>Blog</h1>
        <hr />

        <?php
            try {

                $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                while($row = $stmt->fetch()){
                    
                    echo '<div>';
                        echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
                        echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                        echo '<p>'.$row['postDesc'].'</p>';             
                      echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';               
                    echo '</div>';

                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>

    </div>


</body>
</html>
```

PDO::prepare
------------
 Подготавливает запрос к выполнению и возвращает ассоциированный с этим запросом объект

Подготавливает SQL запрос к базе данных к запуску посредством метода PDOStatement::execute(). Запрос может содержать именованные (:name) или неименованные (?) псевдопеременные, которые будут заменены реальными значениями во время запуска запроса на выполнение. Использовать одновременно и именованные, и неименованные псевдопеременные в одном запросе нельзя, необходимо выбрать что-то одно. Используйте псевдопеременные, чтобы привязать к запросу пользовательский ввод, не включайте данные, введенные пользователем, напрямую в запрос.

Вы должны подбирать уникальные имена псевдопеременных для каждого значение, которое необходимо передавать в запрос при вызове PDOStatement::execute(). Нельзя использовать одну псевдопеременную в запросе больше одного раза, если только не включен режим эмуляции.

Маркеры параметров представляют из себя только непосредственно данные. Ни часть данных, ни специальные слова, ни идентификаторы, никакая другая часть запроса не могут быть переданы через параметры. Например, вы не можете привязать несколько значений к одному параметру для SQL выражения IN().
Вызов PDO::prepare() и PDOStatement::execute() для запросов, которые будут запускаться многократно с различными параметрами, повышает производительность приложения, так как позволяет драйверу кэшировать на клиенте и/или сервере план выполнения запроса и метаданные, а также помогает избежать SQL инъекций, так как нет необходимости экранировать передаваемые параметры.

Если драйвер не поддерживает подготавливаемые запросы, PDO умеет их эмулировать. Также, PDO может заменять псевдопеременные на то, что больше подходит, если, например, драйвер поддерживает только именованные или, наоборот, только неименованные маркеры.

Пример #1 Подготовка SQL запроса с именованными параметрами
```
<?php
/* Выполнение запроса с передачей ему массива параметров */
$sql = 'SELECT name, colour, calories
    FROM fruit
    WHERE calories < :calories AND colour = :colour';
$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute(array(':calories' => 150, ':colour' => 'red'));
$red = $sth->fetchAll();
$sth->execute(array(':calories' => 175, ':colour' => 'yellow'));
$yellow = $sth->fetchAll();
?>
```
Пример #2 Подготовка SQL запроса с неименованными параметрами (?)
```
<?php
/* Выполнение запроса с передачей ему массива параметров */
$sth = $dbh->prepare('SELECT name, colour, calories
    FROM fruit
    WHERE calories < ? AND colour = ?');
$sth->execute(array(150, 'red'));
$red = $sth->fetchAll();
$sth->execute(array(175, 'yellow'));
$yellow = $sth->fetchAll();
?>

```
PDOStatement::execute
---------------------
Запускает подготовленный запрос на выполнение
Запускает подготовленный запрос. Если запрос содержит метки параметров (псевдопеременные), вы должны либо:

вызвать PDOStatement::bindParam(), чтобы привязать PHP переменные к параметрам запроса: связанные переменные передадут свои значения в запрос и получат выходные значения (если есть)

либо передать массив значений входных (только входных) параметров

Пример #1 Выполнение подготовленного запроса с привязкой переменных
```
<?php
/* Выполнение подготовленного запроса с привязкой переменных */
$calories = 150;
$colour = 'red';
$sth = $dbh->prepare('SELECT name, colour, calories
    FROM fruit
    WHERE calories < :calories AND colour = :colour');
$sth->bindParam(':calories', $calories, PDO::PARAM_INT);
$sth->bindParam(':colour', $colour, PDO::PARAM_STR, 12);
$sth->execute();
?>
```
Пример #2 Выполнение подготовленного запроса с передачей массива входных значений (именованные псевдопеременные)
```
<?php
/* Выполнение подготовленного запроса с передачей массива входных значений */
$calories = 150;
$colour = 'red';
$sth = $dbh->prepare('SELECT name, colour, calories
    FROM fruit
    WHERE calories < :calories AND colour = :colour');
$sth->execute(array(':calories' => $calories, ':colour' => $colour));
?>
```
Пример #3 Выполнение подготовленного запроса с передачей массива входных значений (неименованные псевдопеременные - знаки вопроса (?))
```
<?php
/* Выполнение подготовленного запроса с передачей массива входных значений */
$calories = 150;
$colour = 'red';
$sth = $dbh->prepare('SELECT name, colour, calories
    FROM fruit
    WHERE calories < ? AND colour = ?');
$sth->execute(array($calories, $colour));
?>
```
Пример #4 Выполнение подготовленного запроса с привязкой значений к неименованным псевдопеременным (знакам вопроса)
```
<?php
/* Выполнение подготовленного запроса с привязкой PHP переменных */
$calories = 150;
$colour = 'red';
$sth = $dbh->prepare('SELECT name, colour, calories
    FROM fruit
    WHERE calories < ? AND colour = ?');
$sth->bindParam(1, $calories, PDO::PARAM_INT);
$sth->bindParam(2, $colour, PDO::PARAM_STR, 12);
$sth->execute();
?>
```
Пример #5 Выполнение подготовленного запроса с использованием массива для IN выражения
```
<?php
/* Выполнение подготовленного запроса с использованием массива для IN выражения */
$params = array(1, 21, 63, 171);
/* Создаем строку из знаков вопроса (?) в количестве равном количеству параметров */
$place_holders = implode(',', array_fill(0, count($params), '?'));

/*
    В этом примере подготавливается запрос с достаточным количеством неименованных
    псевдопеременных (?) для каждого значения из массива $params. Когда запрос будет
    выполняться, эти знаки вопроса будут заменены на элементы массива. Это не то же
    самое, что использовать PDOStatement::bindParam(), где привязка осуществлялась по
    ссылке на переменную. PDOStatement::execute() связывает параметры по значению.
*/
$sth = $dbh->prepare("SELECT id, name FROM contacts WHERE id IN ($place_holders)");
$sth->execute($params);
?>
```

viewpost.php
------------
```
<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
    header('Location: ./');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

    <div id="wrapper">

        <h1>Blog</h1>
        <hr />
        <p><a href="./">Blog Index</a></p>


        <?php   
            echo '<div>';
                echo '<h1>'.$row['postTitle'].'</h1>';
                echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
                echo '<p>'.$row['postCont'].'</p>';             
            echo '</div>';
        ?>

    </div>

</body>
</html>
```
