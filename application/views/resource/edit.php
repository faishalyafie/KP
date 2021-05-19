<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>

    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <h5 class="card-header"><?= $title; ?> Form DP/ODP</h5>
                <div class="card-body">
                    <form action="" <?= base_url('resource/edit'); ?>" method="POST" class="user">
                        <input type="hidden" name="id" value="<?= $users['id']; ?>">
                        <div class="form-group">
                            <label for="odp">ODP Name</label>
                            <input type="text" class="form-control" id="odp" name="odp" value="<?= $users['nama']; ?>">
                            <?= form_error('odp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="qr">QR ODP</label>
                            <input type="text" class="form-control" id="qr" name="qr" value="<?= $users['qr']; ?>">
                            <?= form_error('qr', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="total">Outspliter Total</label>
                            <input type="text" class="form-control" id="total" name="total" value="<?= $users['total']; ?>">
                            <?= form_error('total', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="os1">Outspliter-1</label>
                            <input type="text" class="form-control" id="os1" name="os1" value="<?= $users['os1']; ?>">
                            <?= form_error('os1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="os2">Outspliter-2</label>
                            <input type="text" class="form-control" id="os2" name="os2" value="<?= $users['os2']; ?>">
                            <?= form_error('os2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="os3">Outspliter-3</label>
                            <input type="text" class="form-control" id="os3" name="os3" value="<?= $users['os3']; ?>">
                            <?= form_error('os3', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="os4">Outspliter-4</label>
                            <input type="text" class="form-control" id="os4" name="os4" value="<?= $users['os4']; ?>">
                            <?= form_error('os4', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="os5">Outspliter-5</label>
                            <input type="text" class="form-control" id="os5" name="os5" value="<?= $users['os5']; ?>">
                            <?= form_error('os5', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="os6">Outspliter-6</label>
                            <input type="text" class="form-control" id="os6" name="os6" value="<?= $users['os6']; ?>">
                            <?= form_error('os6', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="os7">Outspliter-7</label>
                            <input type="text" class="form-control" id="os7" name="os7" value="<?= $users['os7']; ?>">
                            <?= form_error('os7', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="os8">Outspliter-8</label>
                            <input type="text" class="form-control" id="os8" name="os8" value="<?= $users['os8']; ?>">
                            <?= form_error('os8', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Description</label>
                            <textarea class="form-control" id="keterangan" rows="3" name="keterangan" aria-valuetext="<?= $users['keterangan']; ?>"><?= $users['keterangan']; ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger float-right">
                            Save
                        </button>
                        <a href="<?= base_url('resource/odp'); ?>" class="btn btn-secondary">Back</i></a>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->