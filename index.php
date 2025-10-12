
<?php   require 'header.php';
        require 'data.php';
?>

    <main>
      
            <img class="title-photo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/UEFA_Women%27s_Champions_League_logo.svg/1200px-UEFA_Women%27s_Champions_League_logo.svg.png" alt="UEFA champions league">
          <h1>Your Complete Guide to (Some) UEFA Women's Football teams</h1>
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