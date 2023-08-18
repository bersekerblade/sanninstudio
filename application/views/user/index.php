<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow border-left-warning">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary"><?= $page_title; ?></h6>
        </div>
        <div class="card-body">
            <!-- S Page body -->
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="font-weight-bold">
                                <div class="text-truncate">Hi! <?= $user['name']; ?></div>
                                <div class="small text-gray-500"><i class="far fa-paper-plane"></i> <?= $user['email']; ?> · <i class="far fa-calendar-alt"></i> Member est. <?= date('d F Y', $user['date_created']); ?></div>
                                <div class="rounded py-2" style="max-width: fit-content;">
                                    <img class="rounded" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                                </div>
                            </div>
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