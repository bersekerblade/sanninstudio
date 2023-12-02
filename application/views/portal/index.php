<li class="nav-breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
    <span itemprop="name"><?= $page_title; ?></span>
    <meta itemprop="position" content="2">
</li>
</ol>
</div>
<div class="row">


    <div class="col-lg-9 order-1 order-lg-1 entry-contents__main-area">
        <h2 class="section-title"><?= $page_title; ?></h2>
        <div class="entry-news">

            <?php foreach ($tbl_article as $data) : ?>
                <div class="entry-news__list">
                    <div class="entry-news__list--label">
                        <span class="badge bg-success">Primary</span>
                    </div>
                    <div class="entry-news__list--item">
                        <h3><a href="<?= base_url(); ?>article/detail/<?= $data['id']; ?>"><?= $data['title']; ?></a></h3>
                        <time><?= date("Y/m/d", strtotime($data['updated_at'])); ?>
                        </time>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="entry-news__list--pagination">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>