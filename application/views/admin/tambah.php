<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>

    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <h5 class="card-header"> Form <?= $title; ?></h5>
                <div class="card-body">
                    <form action="" <?= base_url('auth/tambah'); ?>" method="POST" class="user">

                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select name="keterangan" id="keterangan" class="form-control">
                                <option value="">Select Description</option>
                                <?php foreach ($description as $d) : ?>
                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select name="role" id="role" class="form-control">
                                <option value="">Select Position</option>
                                <?php foreach ($position as $p) : ?>
                                    <option value="<?= $p; ?>"><?= $p; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-danger float-right">
                            Add User
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