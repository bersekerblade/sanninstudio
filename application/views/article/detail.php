<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow border-left-warning">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-secondary"><?= $tbl_article['title']; ?></h6>
            <h6 class="d-inline-block m-0 font-weight-bold text-info badge">
                <?= $page_title; ?>
            </h6>
        </div>
        <div class="card-body">
            <!-- S Page body -->

            <p class="card-text"><?= $tbl_article['content']; ?></p>
            <hr>
            <a href="<?= base_url('article'); ?>" class="btn btn-primary btn-sm">Go Back</a>

            <!-- E Page body -->
        </div>

    </div>
    <!-- /.container-fluid -->