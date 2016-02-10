<?php require 'includes/header.php'; ?>
<?php require 'includes/nav.php'; ?>

  <main>
   <section>
      <article>
        <h1>Hello User!</h1>
    
        <h2>Welcome <?php echo $_GET["name"]; ?><br>
        Your email address is: <?php echo $_GET["email"]; ?>
        </h2>
      
      </article>
      

      
   </section>
      
  
  </main>

<?php require 'includes/footer.php'; ?>