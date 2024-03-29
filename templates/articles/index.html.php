<h1>Les articles</h1>

<?php foreach ($articles as $article): ?>

    <div class="border border-primary rounded mb-3 p-2">
        <h3><?= $article->getTitle() ?></h3>
        <p class="fs-5"><?= $article->getContent() ?></p>
        <a href="?type=article&action=show&id=<?= $article->getId() ?>" class="btn btn-secondary">Voir</a>
        <a href="?type=article&action=edit&id=<?= $article->getId() ?>" class="btn btn-warning">Modifier</a>
        <a href="?type=article&action=delete&id=<?= $article->getId() ?>" class="btn btn-danger">Supprimer</a>



    </div>

<?php endforeach; ?>

<a href="?type=article&action=create" class="btn btn-success mt-5">Ajouter un article</a>