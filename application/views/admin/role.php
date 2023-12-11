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
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm disabled" title="Delete Role"><i class="fas fa-trash"></i></a>
                                                <?php else : ?>
                                                    <a href="<?= base_url('admin/editrole'); ?>/<?= $r['id']; ?>" class="btn btn-success btn-circle btn-sm" title="Edit Role" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('admin/deleterole'); ?>/<?= $r['id']; ?>" class="btn btn-danger btn-circle btn-sm" title="Delete Role" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></a>
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

<!-- modal add role start  -->
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
<!-- modal add role end  -->

<!-- modal edit role start  -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="newRoleModalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalEditLabel">Edit Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/roleedit'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Role Name</label>
                        <input type="text" name="role" id="role" class="form-control" placeholder="edit role name..." value="<?= $r['role']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal edit role end  -->

<!-- delete modal start  -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete <?= $r['role']; ?> role?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" sure want to delete this role.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('admin/deleterole'); ?>/<?= $r['id']; ?>">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- delete modal end  -->