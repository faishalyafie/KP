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
                                <th scope=" col">Title</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">ODP Name</th>
                                <td><?= $users['nama']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">QR ODP</th>
                                <td><?= $users['qr']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Outspliter Total</th>
                                <td><?= $users['total']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Outspliter-1</th>
                                <td><?= $users['os1']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Outspliter-2</th>
                                <td><?= $users['os2']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Outspliter-3</th>
                                <td><?= $users['os3']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Outspliter-4</th>
                                <td><?= $users['os4']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Outspliter-5</th>
                                <td><?= $users['os5']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Outspliter-6</th>
                                <td><?= $users['os6']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Outspliter-7</th>
                                <td><?= $users['os7']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Outspliter-8</th>
                                <td><?= $users['os8']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Description</th>
                                <td><?= $users['keterangan']; ?></td>
                            </tr>
                    </table>
                    <a href="<?= base_url('admin/A_odptampil'); ?>" class="btn btn-secondary mt-3">Back</a>


                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->