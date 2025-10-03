
<?php   require 'header.php';
        require 'data.php';
?>

    <main>
        <h1>Your Complete Guide to (Some) UEFA Women's Football teams</h1>
            <img src="https://assets-cms.thescore.com/uploads/image/file/787081/w640xh480_GettyImages-2216708428.jpg?ts=1748090105" alt="UEFA cup">
        <div>
            <h2>Teams</h2>

            <?php
            foreach ($teams as $name => $details) { ?> 

            <h3><?php echo "Team: " . $name; ?> </h3>

            <p> <?php echo "League: " . $details['league']; ?> </p>
            <p> <?php echo "UEFA Coefficient Ranking: " . $details['uefa-coefficient-ranking']; ?> </p>
            <p> <?php echo "City: " . $details['city']; ?> </p>

            <img 
            src="<?php echo $details['logo']; ?>" 
            alt="team logo"    
            >
            
            <h4>Opponents:</h4>
            <ul>
                <?php foreach ($details['opponents'] as $opponent) { ?>
                    <li><?php echo $opponent; ?></li>
                    <?php } ?>
            </ul>
                
            <p>    
                 <a href="<?php echo $details['url']; ?> "> Official Website </a>
            </p>
            <?php } ?>

        </div>
    </main>  

<?php 
require 'footer.php';
?>