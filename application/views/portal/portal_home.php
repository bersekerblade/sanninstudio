<!-- start news  -->
<section class="frame">
    <div class="container">
        <h2 class="section-title-home">NEWS</h2>
        <div class="row">
            <?php foreach ($tbl_article as $data) : ?>
                <div class="col-lg-10 mx-auto">
                    <div class="entry-home__news">
                        <div class="entry-home__news--label">
                            <span class="badge bg-success p-0">News</span><time><?= date("j F y", strtotime($data['updated_at'])); ?></time>
                        </div>
                        <div class="entry-home__news--item">
                            <h3><a href="<?= base_url(); ?>portal/detail/<?= $data['id']; ?>"><?= $data['title']; ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 mx-auto">
                <a href="<?= base_url('portal'); ?>" class="btn btn-block btn-outline-primary mb-1">Check All &gt;</a>
            </div>
        </div>
    </div>
</section>
<!-- end news  -->