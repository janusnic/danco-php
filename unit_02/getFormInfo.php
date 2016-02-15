<?php require 'includes/header.php'; ?>
<?php require 'includes/nav.php'; ?>

  <main>
   <section>
      <article>
        <h2>Работа с $_REQUEST как с массивом</h2>
        <div class="row">
        <h1>You are here!</h1>
				<p>Это все, что записано в массиве $_REQUEST:</p>
				<?php
				foreach($_REQUEST as $value) {
				echo "<p>" . $value . "</p>";
				}
				?>
				</div>
				<div id="footer"></div>
        </div>
      </article>



   </section>


  </main>

<?php require 'includes/footer.php'; ?>
