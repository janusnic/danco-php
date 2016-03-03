# danco-php
Admin
======
isset
-----
Определяет, была ли установлена переменная значением отличным от NULL
Пример использования isset()
----------------------------
```
<?php

$var = '';

// Проверка вернет TRUE, поэтому текст будет напечатан.
if (isset($var)) {
    echo "Эта переменная определена, поэтому меня и напечатали.";
}

// В следующем примере мы используем var_dump для вывода
// значения, возвращаемого isset().

$a = "test";
$b = "anothertest";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset ($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE

?>
```
Функция также работает с элементами массивов:
```
<?php

$a = array ('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple'));

var_dump(isset($a['test']));            // TRUE
var_dump(isset($a['foo']));             // FALSE
var_dump(isset($a['hello']));           // FALSE

// Элемент с ключом 'hello' равен NULL, поэтому он считается неопределенным
// Если Вы хотите проверить существование ключей со значением NULL, используйте: 
var_dump(array_key_exists('hello', $a)); // TRUE

// Проверка вложенных элементов массива
var_dump(isset($a['pie']['a']));        // TRUE
var_dump(isset($a['pie']['b']));        // FALSE
var_dump(isset($a['cake']['a']['b']));  // FALSE

?>
```
index.php
----------
```
<?php
//include config
require_once('../includes/config.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  
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

    <p><a href='add-post.php'>Add Post</a></p>

</div>

</body>
</html>


```
menu.php
--------
```
<h1>Blog</h1>
<ul id='adminmenu'>
  <li><a href='index.php'>Blog</a></li>
  <li><a href='users.php'>Users</a></li>
  <li><a href="../" target="_blank">View Website</a></li>
  <li><a href='logout.php'>Logout</a></li>
</ul>
<div class='clear'></div>
<hr />
```
tinymce
========
http://tinymce.cachefly.net/4.0/tinymce.min.js

array_map
---------
array_map — Применяет callback-функцию ко всем элементам указанных массивов

Функция array_map() возвращает массив, содержащий элементы array1 после их обработки callback-функцией. Количество параметров, передаваемых callback-функции, должно совпадать с количеством массивов, переданным функции array_map().
Пример использования array_map()
--------------------------------
```
<?php
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
?>
```
В результате переменная $b будет содержать:
```
Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)
```
extract
-------
Импортирует переменные из массива в текущую таблицу символов
Пример использования extract()
-------------------------------
Функцию extract() также можно использовать для импорта в текущую таблицу символов переменных, содержащихся в ассоциативном массиве, возвращённом функцией wddx_deserialize().
```
<?php

/* Предположим, что $var_array - это массив, полученный в результате
   wddx_deserialize */

$size = "large";
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $size, $shape, $wddx_size\n";

?>
```
Результат выполнения данного примера:
```
blue, large, sphere, medium
```
add-post.php
------------
```
<?php //include config
require_once('../includes/config.php');

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Add Post</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>
</head>
<body>

<div id="wrapper">

  <?php include('menu.php');?>
  <p><a href="./">Blog Admin Index</a></p>

  <h2>Add Post</h2>

  <?php

  //if form has been submitted process it
  if(isset($_POST['submit'])){

    $_POST = array_map( 'stripslashes', $_POST );

    //collect form data
    extract($_POST);

    //very basic validation
    if($postTitle ==''){
      $error[] = 'Please enter the title.';
    }

    if($postDesc ==''){
      $error[] = 'Please enter the description.';
    }

    if($postCont ==''){
      $error[] = 'Please enter the content.';
    }

    if(!isset($error)){

      try {

        //insert into database
        $stmt = $db->prepare('INSERT INTO blog_posts (postTitle,postDesc,postCont,postDate) VALUES (:postTitle, :postDesc, :postCont, :postDate)') ;
        $stmt->execute(array(
          ':postTitle' => $postTitle,
          ':postDesc' => $postDesc,
          ':postCont' => $postCont,
          ':postDate' => date('Y-m-d H:i:s')
        ));

        //redirect to index page
        header('Location: index.php?action=added');
        exit;

      } catch(PDOException $e) {
          echo $e->getMessage();
      }

    }

  }

  //check for any errors
  if(isset($error)){
    foreach($error as $error){
      echo '<p class="error">'.$error.'</p>';
    }
  }
  ?>

  <form action='' method='post'>

    <p><label>Title</label><br />
    <input type='text' name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>'></p>

    <p><label>Description</label><br />
    <textarea name='postDesc' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postDesc'];}?></textarea></p>

    <p><label>Content</label><br />
    <textarea name='postCont' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postCont'];}?></textarea></p>

    <p><input type='submit' name='submit' value='Submit'></p>

  </form>

</div>

```
edit-post.php
--------------
```
<?php //include config
require_once('../includes/config.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Edit Post</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>
</head>
<body>

<div id="wrapper">

  <?php include('menu.php');?>
  <p><a href="./">Blog Admin Index</a></p>

  <h2>Edit Post</h2>


  <?php

  //if form has been submitted process it
  if(isset($_POST['submit'])){

    $_POST = array_map( 'stripslashes', $_POST );

    //collect form data
    extract($_POST);

    //very basic validation
    if($postID ==''){
      $error[] = 'This post is missing a valid id!.';
    }

    if($postTitle ==''){
      $error[] = 'Please enter the title.';
    }

    if($postDesc ==''){
      $error[] = 'Please enter the description.';
    }

    if($postCont ==''){
      $error[] = 'Please enter the content.';
    }

    if(!isset($error)){

      try {

        //insert into database
        $stmt = $db->prepare('UPDATE blog_posts SET postTitle = :postTitle, postDesc = :postDesc, postCont = :postCont WHERE postID = :postID') ;
        $stmt->execute(array(
          ':postTitle' => $postTitle,
          ':postDesc' => $postDesc,
          ':postCont' => $postCont,
          ':postID' => $postID
        ));

        //redirect to index page
        header('Location: index.php?action=updated');
        exit;

      } catch(PDOException $e) {
          echo $e->getMessage();
      }

    }

  }

  ?>


  <?php
  //check for any errors
  if(isset($error)){
    foreach($error as $error){
      echo $error.'<br />';
    }
  }

    try {

      $stmt = $db->prepare('SELECT postID, postTitle, postDesc, postCont FROM blog_posts WHERE postID = :postID') ;
      $stmt->execute(array(':postID' => $_GET['id']));
      $row = $stmt->fetch(); 

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

  ?>

  <form action='' method='post'>
    <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

    <p><label>Title</label><br />
    <input type='text' name='postTitle' value='<?php echo $row['postTitle'];?>'></p>

    <p><label>Description</label><br />
    <textarea name='postDesc' cols='60' rows='10'><?php echo $row['postDesc'];?></textarea></p>

    <p><label>Content</label><br />
    <textarea name='postCont' cols='60' rows='10'><?php echo $row['postCont'];?></textarea></p>

    <p><input type='submit' name='submit' value='Update'></p>

  </form>

</div>

</body>
</html> 

```
delete
-------
```
<?php
//include config
require_once('../includes/config.php');
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


```


