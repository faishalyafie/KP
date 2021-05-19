<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
    </div>


    <div class="row">
        <div class="col-lg-7">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body">

                    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

                    <table class="table table-hover table-sm mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1; ?>
                            <?php foreach ($menu as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $i++ ?></th>
                                    <td><?= $m['menu']; ?></td>
                                    <td>
                                        <a href="<?= base_url('menu/edit/') . $m['id']; ?>" class="badge badge-success">edit</a>
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