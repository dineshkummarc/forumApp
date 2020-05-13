<?php
    require_once "models/posts/getpost.php";
?>

<?php if(isset($_SESSION["userid"])): ?>    
<div class="mt-3"><a class="p-3 btn btn-success" href="index.php?page=createpost&width=1">Create post</a></div>
<?php endif ?>

<?php foreach($allPosts as $post): ?>
    <ul>
        <li><?= $post["id"] ?></li>
        <li><?= $post["title"] ?></li>
        <li><?= $post["name"] ?></li>
        <li><?= $post["createdat"] ?></li>
        <li><?= $post["username"] ?></li>
        <li>0</li>
        <?php if(isset($_SESSION["userid"])): ?>
            <li><a href="#" class="upvote" data="<?= $post["id"] ?>">Upvote</a></li>
        <?php else: ?>
            <li><a href="#" class="set-alert">Upvote</a></li>
        <?php endif ?>
    </ul>
<?php endforeach ?>

<script src="assets/js/upvotePost.js"></script>
