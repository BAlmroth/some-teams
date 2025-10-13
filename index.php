
<?php   require __DIR__.'/header.php';
        require __DIR__.'/data.php';
?>

    <main>
      
            <img class="title-photo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/UEFA_Women%27s_Champions_League_logo.svg/1200px-UEFA_Women%27s_Champions_League_logo.svg.png" alt="UEFA champions league">
          <h1>Your Complete Guide To The Qualified UEFA Champions League Teams of 2025/2026</h1>
          <div class="logos">
        <?php foreach ($teams as $name => $details) { ?> 
            <div class="logo">
                <img
                src="<?php echo $details['logo']; ?>" 
                alt="team logo">
                <h3><?php echo $name; ?></h2>
            </div>   

        <?php } ?>
        </div>
    </main>  

<?php 
require 'footer.php';
?>