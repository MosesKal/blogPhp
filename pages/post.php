<?php

$post = get_post();

if($post === false){
    header("Location:index.php?page=error");
}else{
    ?>
        </div>
        <div class="parallax-container">
            <div class="parallax">
                <img src="img/posts/<?=$post->image?>" alt="<?= $post->title?>"/>
            </div>
        </div>
        <div class="container">

        <h2><?= $post->title?></h2>
        <h6>Par <?= $post->name?> le <?= date("d/m/Y à H:i", strtotime($post->date))?></h6>
        <p><?= nl2br($post->content)?></p>

    <?php
}
?>
<hr>
<h4>Commentaires</h4>