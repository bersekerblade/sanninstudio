<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow border-left-warning">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-secondary"><?= $page_title; ?></h6>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#newSubMenuModal">
                <i class="fas fa-feather fa-sm text-white-50"></i>
                Add Submenu</a>
        </div>
        <div class="card-body">
            <!-- S Page body -->

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif;  ?>


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
                                        <th scope="col">Submenu</th>
                                        <th scope="col">Menu</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Icon</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($subMenu as $sm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $sm['title']; ?></td>
                                            <td><?= $sm['menu']; ?></td>
                                            <td><?= $sm['url']; ?></td>
                                            <td><?= $sm['icon']; ?></td>
                                            <?php if ($sm['is_active'] == 0) { ?>
                                                <td>Not Active</td>
                                            <?php } elseif ($sm['is_active'] == 1) { ?>
                                                <td>Active</td>
                                            <?php }; ?>
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
<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Submenu Name</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Add submenu name...">
                    </div>
                    <div class="form-group">
                        <label>Menu</label>
                        <select id="menu_id" class="form-control" name="menu_id">
                            <option value="">-- Select Menu --</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" name="url" id="url" class="form-control" placeholder="Add submenu url...">
                    </div>
                    <div class="form-group">
                        <label>Icon</label>
                        <input type="text" name="icon" id="icon" class="form-control" placeholder="Add submenu icon...">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select id="is_active" class="form-control" name="is_active">
                            <option value="">-- Select Status --</option>
                            <option value="0">Not Active</option>
                            <option value="1">Active</option>
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