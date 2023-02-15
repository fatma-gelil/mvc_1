
<?php  require"partials/head.php" ?>
    <h1>hello</h1>
    <?php if(! empty($articles)){?>
    <?php foreach($articles as $article): ?>
        <h1><?= $article['title']?></h1>
        <p><?=$article['description']?></p>
        
        <?php endforeach;?>
        <?php }?>
<?php require"partials/footer.php"?>
