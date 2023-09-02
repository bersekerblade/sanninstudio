<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow border-left-warning">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-secondary"><?= $page_title; ?></h6>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#newMenuModal">
                <i class="fas fa-feather fa-sm text-white-50"></i>
                Add Menu</a>
        </div>
        <div class="card-body">
            <!-- S Page body -->

            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('alert'); ?>"></div>
            <div class="card col-md-12 p-0">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body p-0 m-0">
                            <!-- end card -->

                            <table class="table table-hover table-borderless">
                                <thead class="table-warning">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Menu</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($menu as $m) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $m['menu']; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php $i++;
                                    endforeach; ?>
                                </tbody>
                            </table>

                            <!-- end card -->
                        </div>
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

<!-- modal start  -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Menu Name</label>
                        <input type="text" name="menu" id="menu" class="form-control" placeholder="Add menu name...">
                    </div>
                    <div class="form-group">
                        <label>Menu Type</label>
                        <select id="menuType" class="form-control" name="dropdown">
                            <option value="0">Sidebar Menu</option>
                            <option value="1">Drop Down Menu</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal end  -->