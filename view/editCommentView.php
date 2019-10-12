<?php

$title = htmlspecialchars("Modification d'un commentaire");

ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour au post</a></p>


<h2>Modifier le commentaire</h2>

<p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>

<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
<hr>
<form action="index.php?action=editComment&amp;id=<?= $comment['id'] ?>" method="post">
    <div>
        <label for="comment">Nouveau commentaire</label><br />
        <textarea id="changeComment" name="changeComment"></textarea>
        <input type="hidden" id="post_id" name="post_id" value="<?= $comment['post_id'] ?>">
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
