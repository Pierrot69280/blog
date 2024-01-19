<?php

use Core\Session\Session;

?>
<div class="border border-primary rounded mb-5 p-2 ">
    <h3><?= $article->getTitle() ?></h3>
    <p class="fs-5"><?= $article->getContent() ?></p>
    <a href="?type=article&action=edit&id=<?= $article->getId() ?>" class="btn btn-warning">Modifier</a>
    <a href="?type=article&action=delete&id=<?= $article->getId() ?>" class="btn btn-danger">Supprimer</a>
</div>


<div class="border border-dark">
    <?php foreach ($article->getComments() as $comment): ?>
        <?php if(Session::userConnected()) { ?>
            <a class="nav-link active" aria-current="page" href="#"><?= Session::user()['authenticator'] ?> </a>
        <?php } ?>
        <p><strong><?= $comment->getContent() ?></strong></p>
        <a href="?type=comment&action=delete&id=<?= $comment->getId() ?>" class="btn btn-danger">Supprimer</a>
        <a href="?type=comment&action=update&id=<?= $comment->getId() ?>" class="btn btn-warning">Editer</a>
    <?php endforeach; ?>

</div>


<div>
    <form action="?type=comment&action=create" method="post" class="mt-5">

        <div>
            <input class="form-control border border-primary" type="text" name="content" placeholder="Un commentaire ?">
        </div>



        <input type="hidden" name="articleId" value="<?= $article->getId() ?>">
        <div class="mt-4" >

            <button type="submit" class="btn btn-primary">Commenter</button>
            <a href="?type=article&action=index" class="btn btn-secondary">Retour</a>
        </div>

    </form>
</div>