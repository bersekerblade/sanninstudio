<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow border-left-warning">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-secondary"><?= $page_title; ?></h6>
            <a href="<?= base_url('article/add') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-feather fa-sm text-white-50"></i>
                Add Article</a>
        </div>
        <div class="card-body">
            <!-- S Page body -->

            <div class="container">
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('alert'); ?>"></div>

                <!-- Search -->
                <div class="row mt-1">
                    <div class="col-md-4">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" name="keyword" placeholder="search article" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm" id="basic-addon2"><i class="fas fa-swimmer fa-sm text-white-50"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
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
                                    <?= ++$start; ?>
                                    <?= $data['title']; ?>
                                    <a href="<?= base_url(); ?>article/detail/<?= $data['id']; ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url(); ?>article/edit/<?= $data['id']; ?>" class="btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url(); ?>article/delete/<?= $data['id']; ?>" class="btn-circle btn-sm"><i class="fas fa-edit"></i></a>

                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>

            <!-- E Page body -->
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->