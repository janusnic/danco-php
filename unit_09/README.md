# danco-php

class.password.php
------------------

        <?php
        if (!defined('PASSWORD_DEFAULT')) {
                define('PASSWORD_BCRYPT', 1);
                define('PASSWORD_DEFAULT', PASSWORD_BCRYPT);
        }

            Class Password {

                public function __construct() {}


                /**
                 * Hash the password using the specified algorithm
                 *
                 * @param string $password The password to hash
                 * @param int    $algo     The algorithm to use (Defined by PASSWORD_* constants)
                 * @param array  $options  The options for the algorithm to use
                 *
                 * @return string|false The hashed password, or false on error.
                 */
                function password_hash($password, $algo, array $options = array()) {
                    if (!function_exists('crypt')) {
                        trigger_error("Crypt must be loaded for password_hash to function", E_USER_WARNING);
                        return null;
                    }
                    if (!is_string($password)) {
                        trigger_error("password_hash(): Password must be a string", E_USER_WARNING);
                        return null;
                    }
                    if (!is_int($algo)) {
                        trigger_error("password_hash() expects parameter 2 to be long, " . gettype($algo) . " given", E_USER_WARNING);
                        return null;
                    }
                    switch ($algo) {
                        case PASSWORD_BCRYPT :
                            // Note that this is a C constant, but not exposed to PHP, so we don't define it here.
                            $cost = 10;
                            if (isset($options['cost'])) {
                                $cost = $options['cost'];
                                if ($cost < 4 || $cost > 31) {
                                    trigger_error(sprintf("password_hash(): Invalid bcrypt cost parameter specified: %d", $cost), E_USER_WARNING);
                                    return null;
                                }
                            }
                            // The length of salt to generate
                            $raw_salt_len = 16;
                            // The length required in the final serialization
                            $required_salt_len = 22;
                            $hash_format = sprintf("$2y$%02d$", $cost);
                            break;
                        default :
                            trigger_error(sprintf("password_hash(): Unknown password hashing algorithm: %s", $algo), E_USER_WARNING);
                            return null;
                    }
                    if (isset($options['salt'])) {
                        switch (gettype($options['salt'])) {
                            case 'NULL' :
                            case 'boolean' :
                            case 'integer' :
                            case 'double' :
                            case 'string' :
                                $salt = (string)$options['salt'];
                                break;
                            case 'object' :
                                if (method_exists($options['salt'], '__tostring')) {
                                    $salt = (string)$options['salt'];
                                    break;
                                }
                            case 'array' :
                            case 'resource' :
                            default :
                                trigger_error('password_hash(): Non-string salt parameter supplied', E_USER_WARNING);
                                return null;
                        }
                        if (strlen($salt) < $required_salt_len) {
                            trigger_error(sprintf("password_hash(): Provided salt is too short: %d expecting %d", strlen($salt), $required_salt_len), E_USER_WARNING);
                            return null;
                        } elseif (0 == preg_match('#^[a-zA-Z0-9./]+$#D', $salt)) {
                            $salt = str_replace('+', '.', base64_encode($salt));
                        }
                    } else {
                        $buffer = '';
                        $buffer_valid = false;
                        if (function_exists('mcrypt_create_iv') && !defined('PHALANGER')) {
                            $buffer = mcrypt_create_iv($raw_salt_len, MCRYPT_DEV_URANDOM);
                            if ($buffer) {
                                $buffer_valid = true;
                            }
                        }
                        if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
                            $buffer = openssl_random_pseudo_bytes($raw_salt_len);
                            if ($buffer) {
                                $buffer_valid = true;
                            }
                        }
                        if (!$buffer_valid && is_readable('/dev/urandom')) {
                            $f = fopen('/dev/urandom', 'r');
                            $read = strlen($buffer);
                            while ($read < $raw_salt_len) {
                                $buffer .= fread($f, $raw_salt_len - $read);
                                $read = strlen($buffer);
                            }
                            fclose($f);
                            if ($read >= $raw_salt_len) {
                                $buffer_valid = true;
                            }
                        }
                        if (!$buffer_valid || strlen($buffer) < $raw_salt_len) {
                            $bl = strlen($buffer);
                            for ($i = 0; $i < $raw_salt_len; $i++) {
                                if ($i < $bl) {
                                    $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
                                } else {
                                    $buffer .= chr(mt_rand(0, 255));
                                }
                            }
                        }
                        $salt = str_replace('+', '.', base64_encode($buffer));
                    }
                    $salt = substr($salt, 0, $required_salt_len);

                    $hash = $hash_format . $salt;

                    $ret = crypt($password, $hash);

                    if (!is_string($ret) || strlen($ret) <= 13) {
                        return false;
                    }

                    return $ret;
                }

                /**
                 * Get information about the password hash. Returns an array of the information
                 * that was used to generate the password hash.
                 *
                 * array(
                 *    'algo' => 1,
                 *    'algoName' => 'bcrypt',
                 *    'options' => array(
                 *        'cost' => 10,
                 *    ),
                 * )
                 *
                 * @param string $hash The password hash to extract info from
                 *
                 * @return array The array of information about the hash.
                 */
                function password_get_info($hash) {
                    $return = array('algo' => 0, 'algoName' => 'unknown', 'options' => array(), );
                    if (substr($hash, 0, 4) == '$2y$' && strlen($hash) == 60) {
                        $return['algo'] = PASSWORD_BCRYPT;
                        $return['algoName'] = 'bcrypt';
                        list($cost) = sscanf($hash, "$2y$%d$");
                        $return['options']['cost'] = $cost;
                    }
                    return $return;
                }

                /**
                 * Determine if the password hash needs to be rehashed according to the options provided
                 *
                 * If the answer is true, after validating the password using password_verify, rehash it.
                 *
                 * @param string $hash    The hash to test
                 * @param int    $algo    The algorithm used for new password hashes
                 * @param array  $options The options array passed to password_hash
                 *
                 * @return boolean True if the password needs to be rehashed.
                 */
                function password_needs_rehash($hash, $algo, array $options = array()) {
                    $info = password_get_info($hash);
                    if ($info['algo'] != $algo) {
                        return true;
                    }
                    switch ($algo) {
                        case PASSWORD_BCRYPT :
                            $cost = isset($options['cost']) ? $options['cost'] : 10;
                            if ($cost != $info['options']['cost']) {
                                return true;
                            }
                            break;
                    }
                    return false;
                }

                /**
                 * Verify a password against a hash using a timing attack resistant approach
                 *
                 * @param string $password The password to verify
                 * @param string $hash     The hash to verify against
                 *
                 * @return boolean If the password matches the hash
                 */
                public function password_verify($password, $hash) {
                    if (!function_exists('crypt')) {
                        trigger_error("Crypt must be loaded for password_verify to function", E_USER_WARNING);
                        return false;
                    }
                    $ret = crypt($password, $hash);
                    if (!is_string($ret) || strlen($ret) != strlen($hash) || strlen($ret) <= 13) {
                        return false;
                    }

                    $status = 0;
                    for ($i = 0; $i < strlen($ret); $i++) {
                        $status |= (ord($ret[$i]) ^ ord($hash[$i]));
                    }

                    return $status === 0;
                }

            }



 

 class.user.php
---------------

           <?php

          include('class.password.php');

          class User extends Password{

              private $db;
            
            function __construct($db){
              parent::__construct();
            
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
              
              if($this->password_verify($password,$hashed) == 1){
                  
                  $_SESSION['loggedin'] = true;
                  return true;
              }   
            }
            
              
            public function logout(){
              session_destroy();
            }
            
          }


          ?> 


config.php
----------

        <?php
        ob_start();
        session_start();

        //database credentials
        define('DBHOST','localhost');
        define('DBUSER','dev');
        define('DBPASS','ghbdtn');
        define('DBNAME','blog');

        $db = new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
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
---------------

        <?php
        //include config
        require_once('../includes/config.php');

        //if not logged in redirect to login page
        if(!$user->is_logged_in()){ header('Location: /admin/login.php'); }

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

          <p><a href='add-post.php'>Add Post</a></p>

        </div>

        </body>
        </html>

admin/users.php
----------------

          <?php
          //include config
          require_once('../includes/config.php');

          //if not logged in redirect to login page
          if(!$user->is_logged_in()){ header('Location: /admin/login.php'); }

          //show message from add / edit page
          if(isset($_GET['deluser'])){ 

            //if user id is 1 ignore
            if($_GET['deluser'] !='1'){

              $stmt = $db->prepare('DELETE FROM blog_members WHERE memberID = :memberID') ;
              $stmt->execute(array(':memberID' => $_GET['deluser']));

              header('Location: users.php?action=deleted');
              exit;

            }
          } 

          ?>
          <!doctype html>
          <html lang="en">
          <head>
            <meta charset="utf-8">
            <title>Admin - Users</title>
            <link rel="stylesheet" href="../style/normalize.css">
            <link rel="stylesheet" href="../style/main.css">
            <script language="JavaScript" type="text/javascript">
            function deluser(id, title)
            {
              if (confirm("Are you sure you want to delete '" + title + "'"))
              {
                window.location.href = 'users.php?deluser=' + id;
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
              echo '<h3>User '.$_GET['action'].'.</h3>'; 
            } 
            ?>

            <table>
            <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
            <?php
              try {

                $stmt = $db->query('SELECT memberID, username, email FROM blog_members ORDER BY username');
                while($row = $stmt->fetch()){
                  
                  echo '<tr>';
                  echo '<td>'.$row['username'].'</td>';
                  echo '<td>'.$row['email'].'</td>';
                  ?>

                  <td>
                    <a href="edit-user.php?id=<?php echo $row['memberID'];?>">Edit</a> 
                    <?php if($row['memberID'] != 1){?>
                      | <a href="javascript:deluser('<?php echo $row['memberID'];?>','<?php echo $row['username'];?>')">Delete</a>
                    <?php } ?>
                  </td>
                  
                  <?php 
                  echo '</tr>';

                }

              } catch(PDOException $e) {
                  echo $e->getMessage();
              }
            ?>
            </table>

            <p><a href='add-user.php'>Add User</a></p>

          </div>

          </body>
          </html>


admin/add-user.php
------------------

        <?php //include config
        require_once('../includes/config.php');

        //if not logged in redirect to login page
        if(!$user->is_logged_in()){ header('Location: /admin/login.php'); }
        ?>
        <!doctype html>
        <html lang="en">
        <head>
          <meta charset="utf-8">
          <title>Admin - Add User</title>
          <link rel="stylesheet" href="../style/normalize.css">
          <link rel="stylesheet" href="../style/main.css">
        </head>
        <body>

        <div id="wrapper">

          <?php include('menu.php');?>
          <p><a href="users.php">User Admin Index</a></p>

          <h2>Add User</h2>

          <?php

          //if form has been submitted process it
          if(isset($_POST['submit'])){

            //collect form data
            extract($_POST);

            //very basic validation
            if($username ==''){
              $error[] = 'Please enter the username.';
            }

            if($password ==''){
              $error[] = 'Please enter the password.';
            }

            if($passwordConfirm ==''){
              $error[] = 'Please confirm the password.';
            }

            if($password != $passwordConfirm){
              $error[] = 'Passwords do not match.';
            }

            if($email ==''){
              $error[] = 'Please enter the email address.';
            }

            if(!isset($error)){

              $hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);

              try {

                //insert into database
                $stmt = $db->prepare('INSERT INTO blog_members (username,password,email) VALUES (:username, :password, :email)') ;
                $stmt->execute(array(
                  ':username' => $username,
                  ':password' => $hashedpassword,
                  ':email' => $email
                ));

                //redirect to index page
                header('Location: users.php?action=added');
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

            <p><label>Username</label><br />
            <input type='text' name='username' value='<?php if(isset($error)){ echo $_POST['username'];}?>'></p>

            <p><label>Password</label><br />
            <input type='password' name='password' value='<?php if(isset($error)){ echo $_POST['password'];}?>'></p>

            <p><label>Confirm Password</label><br />
            <input type='password' name='passwordConfirm' value='<?php if(isset($error)){ echo $_POST['passwordConfirm'];}?>'></p>

            <p><label>Email</label><br />
            <input type='text' name='email' value='<?php if(isset($error)){ echo $_POST['email'];}?>'></p>
            
            <p><input type='submit' name='submit' value='Add User'></p>

          </form>

        </div>


edit-user.php
--------------

        <?php //include config
        require_once('../includes/config.php');

        //if not logged in redirect to login page
        if(!$user->is_logged_in()){ header('Location: /admin/login.php'); }
        ?>
        <!doctype html>
        <html lang="en">
        <head>
          <meta charset="utf-8">
          <title>Admin - Edit User</title>
          <link rel="stylesheet" href="../style/normalize.css">
          <link rel="stylesheet" href="../style/main.css">
        </head>
        <body>

        <div id="wrapper">

          <?php include('menu.php');?>
          <p><a href="users.php">User Admin Index</a></p>

          <h2>Edit User</h2>


          <?php

          //if form has been submitted process it
          if(isset($_POST['submit'])){

            //collect form data
            extract($_POST);

            //very basic validation
            if($username ==''){
              $error[] = 'Please enter the username.';
            }

            if( strlen($password) > 0){

              if($password ==''){
                $error[] = 'Please enter the password.';
              }

              if($passwordConfirm ==''){
                $error[] = 'Please confirm the password.';
              }

              if($password != $passwordConfirm){
                $error[] = 'Passwords do not match.';
              }

            }
            

            if($email ==''){
              $error[] = 'Please enter the email address.';
            }

            if(!isset($error)){

              try {

                if(isset($password)){

                  $hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);

                  //update into database
                  $stmt = $db->prepare('UPDATE blog_members SET username = :username, password = :password, email = :email WHERE memberID = :memberID') ;
                  $stmt->execute(array(
                    ':username' => $username,
                    ':password' => $hashedpassword,
                    ':email' => $email,
                    ':memberID' => $memberID
                  ));


                } else {

                  //update database
                  $stmt = $db->prepare('UPDATE blog_members SET username = :username, email = :email WHERE memberID = :memberID') ;
                  $stmt->execute(array(
                    ':username' => $username,
                    ':email' => $email,
                    ':memberID' => $memberID
                  ));

                }
                

                //redirect to index page
                header('Location: users.php?action=updated');
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

              $stmt = $db->prepare('SELECT memberID, username, email FROM blog_members WHERE memberID = :memberID') ;
              $stmt->execute(array(':memberID' => $_GET['id']));
              $row = $stmt->fetch(); 

            } catch(PDOException $e) {
                echo $e->getMessage();
            }

          ?>

          <form action='' method='post'>
            <input type='hidden' name='memberID' value='<?php echo $row['memberID'];?>'>

            <p><label>Username</label><br />
            <input type='text' name='username' value='<?php echo $row['username'];?>'></p>

            <p><label>Password (only to change)</label><br />
            <input type='password' name='password' value=''></p>

            <p><label>Confirm Password</label><br />
            <input type='password' name='passwordConfirm' value=''></p>

            <p><label>Email</label><br />
            <input type='text' name='email' value='<?php echo $row['email'];?>'></p>

            <p><input type='submit' name='submit' value='Update User'></p>

          </form>

        </div>

        </body>
        </html> 
