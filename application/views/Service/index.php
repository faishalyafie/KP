<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>

    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <h5 class="card-header"><?= $title; ?> Form Omzet Acces Network</h5>
                <div class="card-body">
                    <form action="" <?= base_url('service'); ?>" method="POST" class="user">

                        <div class="form-group">
                            <input type="text" class="form-control" id="no" name="no" placeholder="No. Service" value="<?= set_value('no'); ?>">
                            <?= form_error('no', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="sn" name="sn" placeholder="Serial Number" value="<?= set_value('sn'); ?>">
                            <?= form_error('sn', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select name="vendor" id="vendor" class="form-control">
                                <option value="">Select Vendor</option>
                                <?php foreach ($vendor as $v) : ?>
                                    <option value="<?= $v; ?>"><?= $v; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('vendor', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="total" name="total" placeholder="Total Port" value="<?= set_value('total'); ?>">
                            <?= form_error('total', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="qr" name="qr" placeholder="DP_Dropcable_QrCode" value="<?= set_value('qr'); ?>">
                            <?= form_error('qr', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="keterangan" rows="3" placeholder="Input Description here" name="keterangan" aria-valuetext="<?= set_value('keterangan'); ?>"></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger float-right">
                            Add Service
                        </button>
                        <a href="<?= base_url('service/oan'); ?>" class="btn btn-secondary">Back</i></a>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->