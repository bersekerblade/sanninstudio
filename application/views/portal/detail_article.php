<li class="nav-breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="">
    <span itemprop="name"> &raquo; <?= $page_title; ?></span>
    <span itemprop="name"> &raquo; <?= $tbl_article['title']; ?></span>
    <meta itemprop="position" content="2">
</li>
</ol>
</div>
<div class="row">


    <div class="col-lg-9 order-1 order-lg-2 entry-contents__main-area">
        <h2 class="section-title"> <?= $page_title; ?></h2>
        <div class="entry-news">
            <div class="entry-news__list">
                <!-- tes -->
                <div class="entry-news">
                    <div class="entry-news__detail">
                        <h3><?= $tbl_article['title']; ?></h3>
                        <div class="metadata2 mb-0"><?= date("j F Y", strtotime($tbl_article['updated_at'])); ?></div>
                        <p class="MsoNormal"><?= $tbl_article['content']; ?></p>
                    </div>
                </div>
                <!-- tes -->
            </div>
            <a href="<?= base_url('portal'); ?>" class="btn btn-pink">Go Back</a>
        </div>
    </div>