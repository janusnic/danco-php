<?php require 'includes/header.php'; ?>
<?php require 'includes/nav.php'; ?>
<?php
	$first_name = $_REQUEST['first_name'];
	$last_name = $_REQUEST['last_name'];
	$email = $_REQUEST['inputEmail'];

	$facebook_url = $_REQUEST['facebook_url'];

	$twitter_handle = $_REQUEST['twitter_handle'];
?>

  <main>
   <section>
      <article>
        <h2>Пример getFormInfo.php </h2>
        <div class="row">
        <h3>You are here!</h3>
        <p>Это запись той информации, которую вы отправили:</p>
        	<p>
        	Имя: <?php echo $first_name . " " . $last_name; ?><br />

        	Адрес электронной почты: <?php echo $_REQUEST['inputEmail']; ?><br />
        	<a href="<?php echo $facebook_url; ?>">URL-aдрес в Facebook:</a><br />

        	Идентификатор в Twitter: <?php echo $_REQUEST['twitter_handle']; ?>
        	<br />
        	</p>

        </div>
      </article>



   </section>


  </main>

<?php require 'includes/footer.php'; ?>
