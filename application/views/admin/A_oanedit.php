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
                    <form action="" <?= base_url('service/edit'); ?>" method="POST" class="user">
                        <input type="hidden" name="id" value="<?= $users['id']; ?>">
                        <div class="form-group">
                            <label for="no">No. Service</label>
                            <input type="text" class="form-control" id="no" name="no" value="<?= $users['no']; ?>">
                            <?= form_error('no', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sn">Serial Number</label>
                            <input type="text" class="form-control" id="sn" name="sn" value="<?= $users['sn']; ?>">
                            <?= form_error('sn', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select name="vendor" id="vendor" class="form-control">
                                <label for="vendor">Vendor</label>
                                <option value="">Select Vendor</option>
                                <?php foreach ($vendor as $v) : ?>
                                    <?php if ($v == $users['vendor']) : ?>
                                        <option value="<?= $v; ?>" selected><?= $v; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $v; ?>"><?= $v; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('vendor', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="total">Total Port</label>
                            <input type="text" class="form-control" id="total" name="total" value="<?= $users['total']; ?>">
                            <?= form_error('total', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="qr">DP_Dropcable_QrCode</label>
                            <input type="text" class="form-control" id="qr" name="qr" value="<?= $users['qr']; ?>">
                            <?= form_error('qr', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Description</label>
                            <textarea class="form-control" id="keterangan" rows="3" name="keterangan" aria-valuetext="<?= $users['keterangan']; ?>"><?= $users['keterangan']; ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger float-right">
                            Save
                        </button>
                        <a href="<?= base_url('admin/A_oantampil'); ?>" class="btn btn-secondary">Back</i></a>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->