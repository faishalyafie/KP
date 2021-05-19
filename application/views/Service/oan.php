<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="<?= base_url('cetak/cetakOan'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Report</a>
    </div>

    <!-- Search -->
    <form class="d-none d-sm-inline-block form-inline navbar-search" action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by No. Service" name="cari">
            <div class="input-group-append">
                <button class="btn btn-danger" type="submit" id="button-addon2"><i class="fas fa-search fa-sm"></i></button>
            </div>
        </div>
    </form>


    <div class="row mt-3">
        <div class="col-lg-7">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body">
                    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
                    <?php if (empty($users)) : ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            Data Not Found!
                        </div>
                    <?php else : ?>

                        <table class="table table-hover table-sm mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">No Service</th>
                                    <th scope="col">Serial Number</th>
                                    <th scope="col">Vendor</th>
                                    <th scope="col">Action</th>
                                <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i = 1; ?>
                                <?php foreach ($users as $u) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $u['no']; ?></td>
                                        <td><?= $u['sn']; ?></td>
                                        <td><?= $u['vendor']; ?></td>
                                        <td>
                                            <a href="<?= base_url('service/oandetail/') . $u['id']; ?>" class="badge badge-warning">detail</a>
                                            <a href="<?= base_url('service/oanEdit/') . $u['id']; ?>" class="badge badge-success">edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->