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

                <!-- start Search -->
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
                        <?php if (empty($tbl_article)) : ?>
                            <div class="row mt-0 col-md-12">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data Not Found!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- start card -->
                <div class="card col-md-12 p-0">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="card-body p-0 m-0">
                                <!-- end start card -->

                                <!-- start table -->
                                <table class="table table-hover table-borderless">
                                    <thead class="table-warning">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tbl_article as $data) : ?>
                                            <tr>
                                                <th scope="row"><?= ++$start; ?></th>
                                                <td><?= $data['title']; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>article/detail/<?= $data['id']; ?>" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                                    <a href="<?= base_url(); ?>article/edit/<?= $data['id']; ?>" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url(); ?>article/delete/<?= $data['id']; ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- end table  -->
                                <!-- start end card -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end end card -->
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