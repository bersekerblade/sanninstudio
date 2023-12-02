<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow border-left-warning">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-secondary"><?= $page_title; ?></h6>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#newRoleModal">
                <i class="fas fa-feather fa-sm text-white-50"></i>
                Add Role</a>
        </div>
        <div class="card-body">
            <!-- S Page body -->

            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
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
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($role as $r) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $r['role']; ?></td>
                                            <td>

                                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-warning btn-circle btn-sm" title="Role Access"><i class="fas fa-wrench"></i></a>
                                                <?php if ($r['role'] == "Administrator") : ?>
                                                    <a href="#" class="btn btn-success btn-circle btn-sm disabled" title="Edit Role"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm disabled" title="Edit Menu"><i class="fas fa-trash"></i></a>
                                                <?php else : ?>
                                                    <a href="#" class="btn btn-success btn-circle btn-sm" title="Edit Role"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm" title="Edit Menu"><i class="fas fa-trash"></i></a>
                                                <?php endif; ?>
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
<div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Role Name</label>
                        <input type="text" name="role" id="role" class="form-control" placeholder="Add role name...">
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