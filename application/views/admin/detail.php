<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <input type="hidden" name="id" value="<?= $users['id']; ?>">
            <div class="card mb-3 o-hidden border-0 shadow-lg" style="max-width: 800px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $users['image']; ?>" class="card-img">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $users['name']; ?></h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Email</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"><?= $users['email']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Jabatan</p>
                                </div>
                                :
                                <div class="col">
                                    <?php if ($users['role_id'] == 1) : ?>
                                        <p class="card-text">Admin</p>
                                    <?php else : ?>
                                        <p class="card-text">Member</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Status Active</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"> <?php if ($users['is_active'] == 1) : ?>
                                            Active
                                        <?php else : ?>
                                            Non-Acive
                                        <?php endif; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Keterangan</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"><?= $users['keterangan']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Member Since</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"><?= date('d F Y', $users['date_created']); ?></p>
                                </div>
                            </div>
                            <a href="<?= base_url('admin/user'); ?>" class="btn btn-secondary mt-5">Back</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>