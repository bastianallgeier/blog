<nav class="blog-prevnext">
    <?php if ($prev = $page->prevListed()): ?>
    <a class="blog-prevnext-prev" title="<?= $prev->title() ?>" href="<?= $prev->url() ?>"><?= option('kirby.blog.article.prev') ?></a>
    <?php else: ?>
    <span class="blog-prevnext-prev"><?= option('kirby.blog.article.prev') ?></span>
    <?php endif ?>

    <?php if ($next = $page->nextListed()): ?>
    <a class="blog-prevnext-next" title="<?= $next->title() ?>" href="<?= $next->url() ?>"><?= option('kirby.blog.article.next') ?></a>
    <?php else: ?>
    <span class="blog-prevnext-next"><?= option('kirby.blog.article.next') ?></span>
    <?php endif ?>
</nav>
