<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="<?= base_url('cetak/cetakUser'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Report</a>
    </div>

    <!-- Search -->
    <form class="d-none d-sm-inline-block form-inline navbar-search" action="" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search by Name" name="cari">
            <div class="input-group-append">
                <button class="btn btn-danger" type="submit" id="button-addon2"><i class="fas fa-search fa-sm"></i></button>
            </div>
        </div>
    </form>


    <div class="row">
        <div class="col-lg-7">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body">
                    <h1 class="h3 mb-0 text-gray-800 mb-3"><?= $title; ?></h1>
                    <a href="<?= base_url('admin/tambah'); ?>" class="btn btn-danger mb-3">Add New User</a>
                    <a href="<?= base_url('admin/nonaktiv'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm float-right"><i class=" fa-sm text-white-50"></i> User Non-Active</a>
                    <?php if (empty($users)) : ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            User Data Not Found!
                        </div>
                </div>
            <?php else : ?>

                <table class="table table-hover mt-3 table-sm">
                    <thead>
                        <tr>

                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Status</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($users as $u) : ?>
                            <tr>
                                <?php if ($u['is_active'] == 1) : ?>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $u['name']; ?></td>
                                    <td>
                                        <?php if ($u['role_id'] == 1) : ?>
                                            Admin
                                        <?php else : ?>
                                            User
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($u['is_active'] == 1) : ?>
                                            Active
                                        <?php else : ?>
                                            Non-Active
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $u['keterangan']; ?></td>

                                    <td>
                                        <a href="<?= base_url('admin/detail/') . $u['id']; ?>" class="badge badge-warning">detail</a>
                                        <a href="<?= base_url('admin/edit/') . $u['id']; ?>" class="badge badge-success">edit</a>
                                        <a href="<?= base_url('admin/delete/') . $u['id']; ?>" class="badge badge-danger" data-toggle="modal" data-target="#deleteModal">delete</a>
                                    </td>
                                <?php endif; ?>
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

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Warning</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Click <strong>Delete</strong> below if you are sure.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('admin/delete/') . $u['id']; ?>">Delete</a>
            </div>
        </div>
    </div>
</div>