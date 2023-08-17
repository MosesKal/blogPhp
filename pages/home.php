<h1>Page d'accueil</h1>

<?php

$posts = get_posts();

foreach($posts as $post){?>

    <div class="col l6 m6 s12">
        <div class="card">
            <div class="card-content">
                <h5 class="grey-text text-darken-2"><?=$post->title?></h5>
            </div>
        </div>
    </div>

<?php
}?>