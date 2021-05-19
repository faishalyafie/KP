<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body">
                    <table class="table">
                        <h1 class="card-header"><?= $title; ?> Detail</h1>
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">No. Service</th>
                                <td><?= $users['no']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Serial Number</th>
                                <td><?= $users['sn']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Vendor</th>
                                <td><?= $users['vendor']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Total Port</th>
                                <td><?= $users['total']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Dp_DropCable_Qrcode</th>
                                <td><?= $users['qr']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Description</th>
                                <td><?= $users['keterangan']; ?></td>
                            </tr>

                    </table>
                    <a href="<?= base_url('admin/A_oantampil'); ?>" class="btn btn-secondary mt-3">Back</a>


                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->