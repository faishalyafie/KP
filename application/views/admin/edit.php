<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>

    <div class="row">
        <div class="col-lg-7 mx-auto ">
            <div class="card">
                <h5 class="card-header"> Form <?= $title; ?></h5>
                <div class="card-body">
                    <form action="" <?= base_url('admin/edit'); ?>" method="POST" class="user">
                        <input type="hidden" name="id" value="<?= $users['id']; ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $users['name']; ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $users['email']; ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Description</label>
                            <select name="keterangan" id="keterangan" class="form-control">
                                <option value="">Select Description</option>
                                <?php foreach ($description as $d) : ?>
                                    <?php if ($d == $users['keterangan']) : ?>
                                        <option value="<?= $d; ?>" selected><?= $d; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $d; ?>"><?= $d; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="role">Position</label>
                            <select name="role" id="role" class="form-control">
                                <option value="">Select Position</option>

                                <?php if ($users['role_id'] == 1) : ?>
                                    <?php $simpan = "Admin" ?>
                                <?php else : ?>
                                    <?php $simpan = "User" ?>
                                <?php endif; ?>

                                <?php foreach ($position as $p) : ?>
                                    <?php if ($p == $simpan) :  ?>
                                        <option value="<?= $p; ?>" selected><?= $p; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $p; ?>"><?= $p; ?></option>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </select>
                            <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="aktiv">Activation</label>
                            <select name="aktiv" id="aktiv" class="form-control">
                                <option value="">Select Activation</option>

                                <?php if ($users['is_active'] == 1) : ?>
                                    <?php $tampung = "Active" ?>
                                <?php else : ?>
                                    <?php $tampung = "Non-Active" ?>
                                <?php endif; ?>

                                <?php foreach ($status as $s) : ?>
                                    <?php if ($s == $tampung) : ?>
                                        <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $s; ?>"><?= $s; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('aktiv', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <button type="submit" class="btn btn-danger float-right">
                            Save Change
                        </button>
                        <a href="<?= base_url('admin/user'); ?>" class="btn btn-secondary">Back</i></a>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->