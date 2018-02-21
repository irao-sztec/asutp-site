<?php if(!empty($articles)): ?>
        <div class="blog-post">
            <h2 class="blog-post-title">

            </h2>
            <?php echo Parsedown::instance()->text($articles['doc_article_body']); ?>
        </div>
<?php endif; ?>
