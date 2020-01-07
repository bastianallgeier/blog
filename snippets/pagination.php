<?php if ($pagination->hasPages()): ?>
<nav class="blog-pagination">
    <?php if ($pagination->hasPrevPage()): ?>
    <a class="blog-pagination-prev" href="<?= $pagination->prevPageUrl() ?>"><?= option('kirby.blog.pagination.prev') ?></a>
    <?php else: ?>
    <span class="blog-pagination-prev"><?= option('kirby.blog.pagination.prev') ?></span>
    <?php endif ?>
    <?php if ($pagination->hasNextPage()): ?>
    <a class="blog-pagination-next" href="<?= $pagination->nextPageUrl() ?>"><?= option('kirby.blog.pagination.next') ?></a>
    <?php else: ?>
    <span class="blog-pagination-next"><?= option('kirby.blog.pagination.next') ?></span>
    <?php endif ?>
</nav>
<?php endif ?>
