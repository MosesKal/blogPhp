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

<form action="" method="post">
    <div class="row">
        <div class="input-field col s12 m6">
            <input type="text" name="name" id="name">
            <label for="name">Nom</label>
        </div>
        <div class="input-field col s12 m6">
        <input type="email" name="email" id="email">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s12 ">
            <textarea name="comment" id="comment" class="materialize-textarea">
            </textarea>
            <label for="comment">Commentaire</label>
        </div>
        <div class="col s12">
            <button type="submit" name="submit" class="btn waves-effect">Commenter ce post</button>
        </div>
    </div>

</form>