<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <?= $page_title; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $tbl_article['title']; ?></h5>
                    <p class="card-text"><?= $tbl_article['content']; ?></p>
                    <a href="<?= base_url('article'); ?>" class="btn btn-primary">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>