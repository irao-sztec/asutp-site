<?php if(!empty($articles)): ?>
    <?php foreach($articles as $article): ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?=$article['doc_article_title']?></h5>
                <p class="card-text"><?php echo Parsedown::instance()->text($article['doc_article_description']); ?></p>
                <a href="<?=SITE?>/bootstrap/article/<?=$article['id']?>" class="card-link">Читать статью</a>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

