<!-- sannin header animation start -->
<section>
    <div class="water-body">
        <div class="water-content">
            <h5><i>SANNINSTUDIO</i></h5>
            <h5><i>SANNINSTUDIO</i></h5>
        </div>
    </div>
</section>
<!-- sannin header animation end -->

<!-- sannin header map start -->
<section class="frame pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="entry-home__news">
                    <div class="entry-home__news--item">
                        <img src="/assets/portal/images/map-kota-batu.PNG" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- sannin header map start -->

<!-- start news  -->
<section class="frame pt-0">
    <div class="container">
        <h6 class="section-title-home mb-0 mt-0">NEWS</h6>
        <div class="row">
            <?php foreach ($tbl_article as $data) : ?>
                <div class="col-lg-6 mx-auto">
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
                <a href="<?= base_url('portal'); ?>" class="btn btn-block btn-outline-primary mb-1 ">Check All &gt;</a>
            </div>
        </div>
    </div>
</section>
<!-- end news  -->