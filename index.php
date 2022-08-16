<?php require('./header.php') ?>

<div class="container d-flex flex-wrap">
       <?php
            $manager = new ArticlesManager();
            $articles = $manager->getAll();

            foreach ($articles as $article): ?> 
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $article->getTitle() ?></h5>
                    <p class="card-text"><?= substr($article->getContent(), 0, 120)?>...</p>
                    <a href="./readArticle.php?id=<?php echo $article->getId() ?>" class="btn btn-link">Lire plus...</a>
                    <a href="./updateArticle.php?id=<?php echo $article->getId() ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="./deleteArticle.php?id=<?php echo $article->getId() ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </div>
            </div>
            <?php endforeach ?>
    </div>
</body>
</html>