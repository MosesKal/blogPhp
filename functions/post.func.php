<?php
    function get_post(){
        global $db;

        $req = $db->query("
        SELECT posts.id,
                posts.title,
                posts.image,
                posts.content,
                posts.date,
                admins.name

        FROM posts
        JOIN admins
        ON posts.writer = admins.email
        WHERE posts.id='{$_GET['id']}'
        "
        );

        $result = $req ->fetchObject();

        return $result;

    }

    function comment($name, $email, $comment){
        global $db;

        $c = [
            'name' => $name,
            'email' => $email,
            'comment' => $comment,
            'post_id' => $_GET["id"]
        ];

        $sql = "INSERT INTO comments(name, email, comment, post_id, date) VALUES(:name, :comment, :post_id, NOW())";
        $req = $db->prepare($sql);
        $req->execute($c);
    }
?>