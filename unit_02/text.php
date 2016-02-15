<?php require 'includes/header.php'; ?>
<?php require 'includes/nav.php'; ?>

  <main>
   <section>
      <article>
        <h2>Получение символа строки </h2>

        <?php
        // Получение первого символа строки
        $str = 'This is a test.';
        $first = $str[0];
        echo  $str[0];

        // Получение третьего символа строки
        $third = $str[2];
        echo  $str[2];
        // Получение последнего символа строки
        $str = 'This is still a test.';
        $last = $str[strlen($str)-1];
echo  $str[strlen($str)-1];
        // Изменение последнего символа строки
        $str = 'Look at the sea';
        $str[strlen($str)-1] = 'e';
        echo $str[strlen($str)-1] ;
        ?>

      </article>

      <article>
      <h2>Пример #1 Получение символа строки </h2>
    <pre>
      // Получение первого символа строки
      $str = 'This is a test.';
      $first = $str[0];

      // Получение третьего символа строки
      $third = $str[2];

      // Получение последнего символа строки
      $str = 'This is still a test.';
      $last = $str[strlen($str)-1];

      // Изменение последнего символа строки
      $str = 'Look at the sea';
      $str[strlen($str)-1] = 'e';
      </pre>
    </article>
    <article>
     <h2>Получение символа строки </h2>
       <p>Строки в PHP внутренне представляют из себя массивы байт. Как результат, доступ или изменение строки по смещению небезопасно с точки зрения многобайтной кодировки, и должно выполняться только со строками в однобайтных кодировках, таких как, например, ISO-8859-1.
       </p>
     </article>
   </section>

   <section>
      <article>

        <h2>Объединение текста</h2>
 <?php
 $first_name = 'Имя';
 $last_name = 'Фамилия';
  ?>
        Имя: <?php echo $first_name; ?><br />
        Фамилия: <?php echo $last_name; ?><br />

      <b>Объединение <br></b>

        Имя: <?php echo $first_name . $last_name; ?><br />

        Имя: <?php echo $first_name . " " . $last_name; ?><br />

      </article>

      <article>
      <h2>Пример #2 Объединение текста</h2>
    <pre>
      &lt;?php
      $first_name = 'Имя';
      $last_name = 'Фамилия';
       ?&gt;

      Имя: &lt;?php echo $first_name; ?&gt;
      Фамилия: &lt;?php echo $last_name; ?&gt;
      Теперь сведите их в одну строку и объедините имя и фамилию:
      Имя: &lt;?php echo $first_name . $last_name; ?&gt;

      Имя: &lt;?php echo $first_name . " " . $last_name; ?&gt;
      </pre>
    </article>
    <article>
     <h2>Объединение текста</h2>
       <p>В PHP конкатенация осуществляется с помощью точки ( . ).
       </p>


     </article>
   </section>
   <section>
      <article>
        <h2>Поиск в тексте</h2>
        <h3>Вступайте в наш виртуальный клуб </h3>
        <p>Пожалуйста, введите ниже свои данные для связи в Интернете:</p>

            <form action="getFormInfo1.php" method="POST">

                <div class="form-group">
                    <label for="first_name">Имя:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="last_name">Фамилия:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="inputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="facebook_url">URL-адрес в Facebook:</label>
                    <input type="text" class="form-control" name="facebook_url" placeholder="URL-адрес в Facebook">
                </div>
                <div class="form-group">
                    <label for="twitter_handle">Идентификатор в Twitter:</label>
                    <input type="text" class="form-control" name="twitter_handle" placeholder="Идентификатор в Twitter">
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                </div>

                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Вступить в клуб</button>
                <button type="reset" class="btn btn-primary">Очистить и начать все сначала</button>
            </form>


      </article>

      <article>
      <h2>Пример #3 Поиск в тексте</h2>
    <pre>
      &lt;h3&gt;Вступайте в наш виртуальный клуб &lt;/h3&gt;
              &lt;p&gt;Пожалуйста, введите ниже свои данные для связи в Интернете:&lt;/p&gt;

                  &lt;form action=&quot;getFormInfo1.php&quot; method=&quot;POST&quot;&gt;

                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;first_name&quot;&gt;Имя:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;first_name&quot; placeholder=&quot;Имя&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;last_name&quot;&gt;Фамилия:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;last_name&quot; placeholder=&quot;Фамилия&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;inputEmail&quot;&gt;Email&lt;/label&gt;
                          &lt;input type=&quot;email&quot; class=&quot;form-control&quot; name=&quot;inputEmail&quot; placeholder=&quot;Email&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;facebook_url&quot;&gt;URL-адрес в Facebook:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;facebook_url&quot; placeholder=&quot;URL-адрес в Facebook&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;twitter_handle&quot;&gt;Идентификатор в Twitter:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;twitter_handle&quot; placeholder=&quot;Идентификатор в Twitter&quot;&gt;
                      &lt;/div&gt;

                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;inputPassword&quot;&gt;Password&lt;/label&gt;
                          &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;inputPassword&quot; placeholder=&quot;Password&quot;&gt;
                      &lt;/div&gt;

                      &lt;div class=&quot;checkbox&quot;&gt;
                          &lt;label&gt;&lt;input type=&quot;checkbox&quot;&gt; Remember me&lt;/label&gt;
                      &lt;/div&gt;
                      &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Вступить в клуб&lt;/button&gt;
                      &lt;button type=&quot;reset&quot; class=&quot;btn btn-primary&quot;&gt;Очистить и начать все сначала&lt;/button&gt;
                  &lt;/form&gt;

</pre>

<h2>getFormInfo1.php</h2>
<pre>
                    &lt;?php
                  	$first_name = $_REQUEST['first_name'];
                  	$last_name = $_REQUEST['last_name'];
                  	$email = $_REQUEST['inputEmail'];
                  	$facebook_url = $_REQUEST['facebook_url'];
                  	$twitter_handle = $_REQUEST['twitter_handle'];
                  ?&gt;
                    &lt;main&gt;
                     &lt;section&gt;
                        &lt;article&gt;
                          &lt;h2&gt;Пример getFormInfo.php &lt;/h2&gt;
                          &lt;div class=&quot;row&quot;&gt;
                          &lt;h3&gt;You are here!&lt;/h3&gt;
                          &lt;p&gt;Это запись той информации, которую вы отправили:&lt;/p&gt;
                          	&lt;p&gt;
                          	Имя: &lt;?php echo $first_name . &quot; &quot; . $last_name; ?&gt;&lt;br /&gt;

                          	Адрес электронной почты: &lt;?php echo $_REQUEST['inputEmail']; ?&gt;&lt;br /&gt;
                          	&lt;a href=&quot;&lt;?php echo $facebook_url; ?&gt;&quot;&gt;URL-aдрес в Facebook:&lt;/a&gt;&lt;br /&gt;

                          	Идентификатор в Twitter: &lt;?php echo $_REQUEST['twitter_handle']; ?&gt;
                          	&lt;br /&gt;
                          	&lt;/p&gt;

                          &lt;/div&gt;
                        &lt;/article&gt;
                     &lt;/section&gt;
                    &lt;/main&gt;
      </pre>
    </article>

   </section>

   <section>
      <article>
        <h2>Поиск в тексте</h2>
        <h3>Вступайте в наш виртуальный клуб </h3>
        <p>Пожалуйста, введите ниже свои данные для связи в Интернете:</p>
            <form action="getFormInfo2.php" method="POST">
                <div class="form-group">
                    <label for="first_name">Имя:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="last_name">Фамилия:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="inputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="facebook_url">URL-адрес в Facebook:</label>
                    <input type="text" class="form-control" name="facebook_url" placeholder="URL-адрес в Facebook">
                </div>
                <div class="form-group">
                    <label for="twitter_handle">Идентификатор в Twitter:</label>
                    <input type="text" class="form-control" name="twitter_handle" placeholder="Идентификатор в Twitter">
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Вступить в клуб</button>
                <button type="reset" class="btn btn-primary">Очистить и начать все сначала</button>
            </form>
      </article>
      <article>
      <h2>Пример #4 Поиск в тексте</h2>
    <pre>
      &lt;h3&gt;Вступайте в наш виртуальный клуб &lt;/h3&gt;
              &lt;p&gt;Пожалуйста, введите ниже свои данные для связи в Интернете:&lt;/p&gt;
                  &lt;form action=&quot;getFormInfo2.php&quot; method=&quot;POST&quot;&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;first_name&quot;&gt;Имя:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;first_name&quot; placeholder=&quot;Имя&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;last_name&quot;&gt;Фамилия:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;last_name&quot; placeholder=&quot;Фамилия&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;inputEmail&quot;&gt;Email&lt;/label&gt;
                          &lt;input type=&quot;email&quot; class=&quot;form-control&quot; name=&quot;inputEmail&quot; placeholder=&quot;Email&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;facebook_url&quot;&gt;URL-адрес в Facebook:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;facebook_url&quot; placeholder=&quot;URL-адрес в Facebook&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;twitter_handle&quot;&gt;Идентификатор в Twitter:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;twitter_handle&quot; placeholder=&quot;Идентификатор в Twitter&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;inputPassword&quot;&gt;Password&lt;/label&gt;
                          &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;inputPassword&quot; placeholder=&quot;Password&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;checkbox&quot;&gt;
                          &lt;label&gt;&lt;input type=&quot;checkbox&quot;&gt; Remember me&lt;/label&gt;
                      &lt;/div&gt;
                      &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Вступить в клуб&lt;/button&gt;
                      &lt;button type=&quot;reset&quot; class=&quot;btn btn-primary&quot;&gt;Очистить и начать все сначала&lt;/button&gt;
                  &lt;/form&gt;
</pre>

<h2>getFormInfo2.php</h2>
<pre>
                    &lt;?php
                  	$first_name = $_REQUEST['first_name'];
                  	$last_name = $_REQUEST['last_name'];
                  	$email = $_REQUEST['inputEmail'];
                  	$facebook_url = $_REQUEST['facebook_url'];

                    $position = strpos($facebook_url, "facebook.com");

                    if ($position === false) {
                      $facebook_url = "http://www.facebook.com/" . $facebook_url;
                      }

                  	$twitter_handle = $_REQUEST['twitter_handle'];
                  ?&gt;
                    &lt;main&gt;
                     &lt;section&gt;
                        &lt;article&gt;
                          &lt;h2&gt;Пример getFormInfo.php &lt;/h2&gt;
                          &lt;div class=&quot;row&quot;&gt;
                          &lt;h3&gt;You are here!&lt;/h3&gt;
                          &lt;p&gt;Это запись той информации, которую вы отправили:&lt;/p&gt;
                          	&lt;p&gt;
                          	Имя: &lt;?php echo $first_name . &quot; &quot; . $last_name; ?&gt;&lt;br /&gt;
                          	Адрес электронной почты: &lt;?php echo $_REQUEST['inputEmail']; ?&gt;&lt;br /&gt;
                          	&lt;a href=&quot;&lt;?php echo $facebook_url; ?&gt;&quot;&gt;URL-aдрес в Facebook:&lt;/a&gt;&lt;br /&gt;
                          	Идентификатор в Twitter: &lt;?php echo $_REQUEST['twitter_handle']; ?&gt;
                          	&lt;br /&gt;
                          	&lt;/p&gt;
                          &lt;/div&gt;
                        &lt;/article&gt;
                     &lt;/section&gt;
                    &lt;/main&gt;
      </pre>
    </article>

   </section>
   <section>
      <article>
        <h2>Поиск в тексте</h2>
        <h3>Вступайте в наш виртуальный клуб </h3>
        <p>Пожалуйста, введите ниже свои данные для связи в Интернете:</p>
            <form action="getFormInfo3.php" method="POST">
                <div class="form-group">
                    <label for="first_name">Имя:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="last_name">Фамилия:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="inputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="facebook_url">URL-адрес в Facebook:</label>
                    <input type="text" class="form-control" name="facebook_url" placeholder="URL-адрес в Facebook">
                </div>
                <div class="form-group">
                    <label for="twitter_handle">Идентификатор в Twitter:</label>
                    <input type="text" class="form-control" name="twitter_handle" placeholder="Идентификатор в Twitter">
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Вступить в клуб</button>
                <button type="reset" class="btn btn-primary">Очистить и начать все сначала</button>
            </form>
      </article>
      <article>
      <h2>Пример #5 Поиск в тексте</h2>
    <pre>
      &lt;h3&gt;Вступайте в наш виртуальный клуб &lt;/h3&gt;
              &lt;p&gt;Пожалуйста, введите ниже свои данные для связи в Интернете:&lt;/p&gt;
                  &lt;form action=&quot;getFormInfo3.php&quot; method=&quot;POST&quot;&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;first_name&quot;&gt;Имя:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;first_name&quot; placeholder=&quot;Имя&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;last_name&quot;&gt;Фамилия:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;last_name&quot; placeholder=&quot;Фамилия&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;inputEmail&quot;&gt;Email&lt;/label&gt;
                          &lt;input type=&quot;email&quot; class=&quot;form-control&quot; name=&quot;inputEmail&quot; placeholder=&quot;Email&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;facebook_url&quot;&gt;URL-адрес в Facebook:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;facebook_url&quot; placeholder=&quot;URL-адрес в Facebook&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;twitter_handle&quot;&gt;Идентификатор в Twitter:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;twitter_handle&quot; placeholder=&quot;Идентификатор в Twitter&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;inputPassword&quot;&gt;Password&lt;/label&gt;
                          &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;inputPassword&quot; placeholder=&quot;Password&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;checkbox&quot;&gt;
                          &lt;label&gt;&lt;input type=&quot;checkbox&quot;&gt; Remember me&lt;/label&gt;
                      &lt;/div&gt;
                      &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Вступить в клуб&lt;/button&gt;
                      &lt;button type=&quot;reset&quot; class=&quot;btn btn-primary&quot;&gt;Очистить и начать все сначала&lt;/button&gt;
                  &lt;/form&gt;
  </pre>

  <h2>getFormInfo3.php</h2>
  <pre>
                    &lt;?php
                    $first_name = trim($_REQUEST['first_name']);
                    $last_name = trim($_REQUEST['last_name']);
                    $email = trim($_REQUEST['inputEmail']);

                    $facebook_url = str_replace("facebook.org", "facebook.com",	trim($_REQUEST['facebook_url']));

                    $position = strpos($facebook_url, "facebook.com");

                    if ($position === false) {
                  		  $facebook_url = "http://www.facebook.com/" . $facebook_url;
                  		}

                  	$twitter_handle = trim($_REQUEST['twitter_handle']);
                  ?&gt;
                    &lt;main&gt;
                     &lt;section&gt;
                        &lt;article&gt;
                          &lt;h2&gt;Пример getFormInfo3.php &lt;/h2&gt;
                          &lt;div class=&quot;row&quot;&gt;
                          &lt;h3&gt;You are here!&lt;/h3&gt;
                          &lt;p&gt;Это запись той информации, которую вы отправили:&lt;/p&gt;
                            &lt;p&gt;
                            Имя: &lt;?php echo $first_name . &quot; &quot; . $last_name; ?&gt;&lt;br /&gt;
                            Адрес электронной почты: &lt;?php echo $_REQUEST['inputEmail']; ?&gt;&lt;br /&gt;
                            &lt;a href=&quot;&lt;?php echo $facebook_url; ?&gt;&quot;&gt;URL-aдрес в Facebook:&lt;/a&gt;&lt;br /&gt;
                            Идентификатор в Twitter: &lt;?php echo $_REQUEST['twitter_handle']; ?&gt;
                            &lt;br /&gt;
                            &lt;/p&gt;
                          &lt;/div&gt;
                        &lt;/article&gt;
                     &lt;/section&gt;
                    &lt;/main&gt;
      </pre>
    </article>

   </section>

   <section>
      <article>
        <h2>Изменение текста </h2>
        <h3>Вступайте в наш виртуальный клуб </h3>
        <p>Пожалуйста, введите ниже свои данные для связи в Интернете:</p>
            <form action="getFormInfo4.php" method="POST">
                <div class="form-group">
                    <label for="first_name">Имя:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="last_name">Фамилия:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="inputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="facebook_url">URL-адрес в Facebook:</label>
                    <input type="text" class="form-control" name="facebook_url" placeholder="URL-адрес в Facebook">
                </div>
                <div class="form-group">
                    <label for="twitter_handle">Идентификатор в Twitter:</label>
                    <input type="text" class="form-control" name="twitter_handle" placeholder="Идентификатор в Twitter">
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Вступить в клуб</button>
                <button type="reset" class="btn btn-primary">Очистить и начать все сначала</button>
            </form>
      </article>
      <article>
      <h2>Пример #6 Изменение текста </h2>
    <pre>
      &lt;h3&gt;Вступайте в наш виртуальный клуб &lt;/h3&gt;
              &lt;p&gt;Пожалуйста, введите ниже свои данные для связи в Интернете:&lt;/p&gt;
                  &lt;form action=&quot;getFormInfo3.php&quot; method=&quot;POST&quot;&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;first_name&quot;&gt;Имя:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;first_name&quot; placeholder=&quot;Имя&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;last_name&quot;&gt;Фамилия:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;last_name&quot; placeholder=&quot;Фамилия&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;inputEmail&quot;&gt;Email&lt;/label&gt;
                          &lt;input type=&quot;email&quot; class=&quot;form-control&quot; name=&quot;inputEmail&quot; placeholder=&quot;Email&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;facebook_url&quot;&gt;URL-адрес в Facebook:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;facebook_url&quot; placeholder=&quot;URL-адрес в Facebook&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;twitter_handle&quot;&gt;Идентификатор в Twitter:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;twitter_handle&quot; placeholder=&quot;Идентификатор в Twitter&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;inputPassword&quot;&gt;Password&lt;/label&gt;
                          &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;inputPassword&quot; placeholder=&quot;Password&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;checkbox&quot;&gt;
                          &lt;label&gt;&lt;input type=&quot;checkbox&quot;&gt; Remember me&lt;/label&gt;
                      &lt;/div&gt;
                      &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Вступить в клуб&lt;/button&gt;
                      &lt;button type=&quot;reset&quot; class=&quot;btn btn-primary&quot;&gt;Очистить и начать все сначала&lt;/button&gt;
                  &lt;/form&gt;
  </pre>

  <h2>getFormInfo4.php</h2>
  <pre>
                    &lt;?php
                    $first_name = trim($_REQUEST['first_name']);
                    $last_name = trim($_REQUEST['last_name']);
                    $email = trim($_REQUEST['inputEmail']);

                    $facebook_url = str_replace("facebook.org", "facebook.com",	trim($_REQUEST['facebook_url']));

                    $position = strpos($facebook_url, "facebook.com");

                    if ($position === false) {
                       $facebook_url = "http://www.facebook.com/" . $facebook_url;
                     }

                     $twitter_url = 'http://www.twitter.com/';

                     $twitter_handle = trim($_REQUEST['twitter_handle']);

                   	$position = strpos($twitter_handle, "@");

                   	if ($position === false) {
                   		$twitter_url = $twitter_url . $twitter_handle;
                   		} else {
                   			// некие действия по удалению символа @ из идентификатора Twitter
                   			$twitter_url = $twitter_url . substr($twitter_handle,$position+1);
                   	}
                  ?&gt;
                    &lt;main&gt;
                     &lt;section&gt;
                        &lt;article&gt;
                          &lt;h2&gt;Пример getFormInfo3.php &lt;/h2&gt;
                          &lt;div class=&quot;row&quot;&gt;
                          &lt;h3&gt;You are here!&lt;/h3&gt;
                          &lt;p&gt;Это запись той информации, которую вы отправили:&lt;/p&gt;
                            &lt;p&gt;
                            Имя: &lt;?php echo $first_name . &quot; &quot; . $last_name; ?&gt;&lt;br /&gt;
                            Адрес электронной почты: &lt;?php echo $_REQUEST['inputEmail']; ?&gt;&lt;br /&gt;
                            &lt;a href=&quot;&lt;?php echo $facebook_url; ?&gt;&quot;&gt;URL-aдрес в Facebook:&lt;/a&gt;&lt;br /&gt;
                            Идентификатор в Twitter: &lt;?php echo $_REQUEST['twitter_handle']; ?&gt;
                            &lt;br /&gt;
                            &lt;/p&gt;
                          &lt;/div&gt;
                        &lt;/article&gt;
                     &lt;/section&gt;
                    &lt;/main&gt;
      </pre>
    </article>

   </section>

   <section>
      <article>
        <h2>Работа с $_REQUEST как с массивом</h2>
        <h3>Вступайте в наш виртуальный клуб </h3>
        <p>Пожалуйста, введите ниже свои данные для связи в Интернете:</p>
            <form action="getFormInfo.php" method="POST">
                <div class="form-group">
                    <label for="first_name">Имя:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="last_name">Фамилия:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="inputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="facebook_url">URL-адрес в Facebook:</label>
                    <input type="text" class="form-control" name="facebook_url" placeholder="URL-адрес в Facebook">
                </div>
                <div class="form-group">
                    <label for="twitter_handle">Идентификатор в Twitter:</label>
                    <input type="text" class="form-control" name="twitter_handle" placeholder="Идентификатор в Twitter">
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Вступить в клуб</button>
                <button type="reset" class="btn btn-primary">Очистить и начать все сначала</button>
            </form>
      </article>
      <article>
      <h2>Пример #7 Работа с $_REQUEST как с массивом</h2>
    <pre>
      &lt;h3&gt;Вступайте в наш виртуальный клуб &lt;/h3&gt;
              &lt;p&gt;Пожалуйста, введите ниже свои данные для связи в Интернете:&lt;/p&gt;
                  &lt;form action=&quot;getFormInfo.php&quot; method=&quot;POST&quot;&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;first_name&quot;&gt;Имя:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;first_name&quot; placeholder=&quot;Имя&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;last_name&quot;&gt;Фамилия:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;last_name&quot; placeholder=&quot;Фамилия&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;inputEmail&quot;&gt;Email&lt;/label&gt;
                          &lt;input type=&quot;email&quot; class=&quot;form-control&quot; name=&quot;inputEmail&quot; placeholder=&quot;Email&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;facebook_url&quot;&gt;URL-адрес в Facebook:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;facebook_url&quot; placeholder=&quot;URL-адрес в Facebook&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;twitter_handle&quot;&gt;Идентификатор в Twitter:&lt;/label&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;twitter_handle&quot; placeholder=&quot;Идентификатор в Twitter&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;form-group&quot;&gt;
                          &lt;label for=&quot;inputPassword&quot;&gt;Password&lt;/label&gt;
                          &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;inputPassword&quot; placeholder=&quot;Password&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;checkbox&quot;&gt;
                          &lt;label&gt;&lt;input type=&quot;checkbox&quot;&gt; Remember me&lt;/label&gt;
                      &lt;/div&gt;
                      &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Вступить в клуб&lt;/button&gt;
                      &lt;button type=&quot;reset&quot; class=&quot;btn btn-primary&quot;&gt;Очистить и начать все сначала&lt;/button&gt;
                  &lt;/form&gt;
  </pre>

  <h2>getFormInfo.php</h2>
  <pre>
                    &lt;?php
                    foreach($_REQUEST as $value) {
                    echo "<p>" . $value . "</p>";
                    }
                  ?&gt;
      </pre>
    </article>

   </section>
  </main>

<?php require 'includes/footer.php'; ?>
