<div class="container">

    <?php if ($this->session->flashdata('alert')) : ?>
        <div class="row mt-3">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy Added!</strong> <?= $this->session->flashdata('alert'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('article/add') ?>" class="btn btn-warning">Add Article</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="keyword">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h6><?= $page_title; ?></h6>
            <?php if (empty($tbl_article)) : ?>
                <div class="row mt-3">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Data Not Found!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($tbl_article as $data) : ?>
                    <li class="list-group-item">
                        <?= $data['title']; ?>
                        <a href="<?= base_url(); ?>article/detail/<?= $data['id']; ?>" class="badge bg-primary">Detail</a>
                        <a href="<?= base_url(); ?>article/edit/<?= $data['id']; ?>" class="badge bg-warning">Edit</a>
                        <a href="<?= base_url(); ?>article/delete/<?= $data['id']; ?>" class="badge bg-danger" onclick="return confirm('Sure?');">Delete</a>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>