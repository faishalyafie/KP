<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>

    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <h5 class="card-header"> <?= $title; ?> Form DP/ODP</h5>
                <div class="card-body">
                    <form action="" <?= base_url('admin/A_odptambah'); ?>" method="POST" class="user">

                        <div class="form-group">
                            <input type="text" class="form-control" id="odp" name="odp" placeholder="ODP Name" value="<?= set_value('odp'); ?>">
                            <?= form_error('odp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="qr" name="qr" placeholder="QR ODP" value="<?= set_value('qr'); ?>">
                            <?= form_error('qr', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="total" name="total" placeholder="Outspliter Total" value="<?= set_value('total'); ?>">
                            <?= form_error('total', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="os1" name="os1" placeholder="Outspliter-1" value="<?= set_value('os1'); ?>">
                            <?= form_error('os1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="os2" name="os2" placeholder="Outspliter-2" value="<?= set_value('os2'); ?>">
                            <?= form_error('os2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="os3" name="os3" placeholder="Outspliter-3" value="<?= set_value('os3'); ?>">
                            <?= form_error('os3', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="os4" name="os4" placeholder="Outspliter-4" value="<?= set_value('os4'); ?>">
                            <?= form_error('os4', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="os5" name="os5" placeholder="Outspliter-5" value="<?= set_value('os5'); ?>">
                            <?= form_error('os5', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="os6" name="os6" placeholder="Outspliter-6" value="<?= set_value('os6'); ?>">
                            <?= form_error('os6', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="os7" name="os7" placeholder="Outspliter-7" value="<?= set_value('os7'); ?>">
                            <?= form_error('os7', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="os8" name="os8" placeholder="Outspliter-8" value="<?= set_value('os8'); ?>">
                            <?= form_error('os8', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="keterangan" rows="3" placeholder="Input Description here" name="keterangan" aria-valuetext="<?= set_value('keterangan'); ?>"></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger float-right">
                            Add ODP
                        </button>
                        <a href="<?= base_url('admin/A_odptampil'); ?>" class="btn btn-secondary">Back</i></a>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->