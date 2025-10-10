
<?php   require 'header.php';
        require 'data.php';
?>

    <main>
        <h1>Your Complete Guide to (Some) UEFA Women's Football teams</h1>
            <img src="https://assets-cms.thescore.com/uploads/image/file/787081/w640xh480_GettyImages-2216708428.jpg?ts=1748090105" alt="UEFA cup">
        <div class="logos">
        <?php
            foreach ($teams as $name => $details) { ?> 
            <div class="logo">
                <img
                src="<?php echo $details['logo']; ?>" 
                alt="team logo">
            </div>   
        <?php } ?>
        </div>
    </main>  

<?php 
require 'footer.php';
?>