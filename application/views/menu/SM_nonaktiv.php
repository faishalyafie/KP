<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="<?= base_url('menu/submenu'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class=" fa-sm text-white-50"></i> Submenu Active</a>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <?= $this->session->set_flashdata('message'); ?>
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
                                <th scope="col">Title</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($subMenu as $sm) : ?>
                                <tr>
                                    <?php if ($sm['is_active'] == 0) : ?>
                                        <th scope="row"><?= $i++ ?></th>
                                        <td><?= $sm['title']; ?></td>
                                        <td><?= $sm['icon']; ?></td>
                                        <td>
                                            <?php if ($sm['is_active'] == 1) : ?>
                                                Active
                                            <?php else : ?>
                                                Non-Active
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('menu/SM_edit/') . $sm['id']; ?>" class="badge badge-success">edit</a>
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