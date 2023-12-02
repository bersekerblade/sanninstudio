<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $tbl_article['id']; ?>">
        <div class="card shadow border-left-warning">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-secondary"><?= $page_title; ?></h6>
                <button type="submit" name="edit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-feather fa-sm text-white-50"></i>
                    Update</button>
            </div>
            <div class="card-body">
                <!-- S Page body -->

                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('alert'); ?>"></div>


                <div class="mb-3">
                    <!-- <label class="form-label">Title :</label> -->
                    <input type="text" class="form-control" id="" placeholder="Fill Title Here" name="title" value="<?= $tbl_article['title']; ?>">
                    <div class="form-text text-warning"><?= form_error('title') ?></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Content :</label>
                    <textarea class="form-control" id="text-editor" rows="3" placeholder="Fill Content Here" name="content"><?= $tbl_article['content']; ?></textarea>
                    <div class="form-text text-warning"><?= form_error('content') ?></div>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </form>
</div>
<!-- End of Main Content -->