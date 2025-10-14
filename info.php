<?php   require 'header.php';
        require 'data.php';
?>

    <info-main>

        <div class="info-brackets">
     <?php foreach ($teams as $name => $details) { ?> 
            <div class="info" id="<?= $name; ?>"> 

                <div class="info-left">
                    <h1><?php echo $name; ?></h1>
                    <img src="<?php echo $details['logo']; ?>" alt="logo">
                </div>

                <div class="info-right">
                    <h4>League:</h4> <p> <?php echo $details['league']; ?> </p> <br>
                    <h4>UEFA Coefficient Ranking:</h4> <p><?php echo $details['uefa-coefficient-ranking']; ?> </p> <br>
                    <h4>City:</h4> <p><?php echo $details['city']; ?></p> 
                    <a class="info-link" href= "<?php echo $details['url'];?>" target="website"><h4>Official website</h4></a> 
                </div>

                <div class="info-bottom">
                    <h4>Opponents in UEFA Champions League:</h4>
                    <div class ="info-opponents">
                        <ul>
                            <?php foreach ($details['opponents'] as $opponent) { ?>
                                <li><?php echo $opponent; ?></li>
                            <?php } ?>
                        </ul>
                    </div> 
                </div>

            </div>
                <?php } ?>

        </div>

    </info-main>    

<?php 
require 'footer.php';
?>