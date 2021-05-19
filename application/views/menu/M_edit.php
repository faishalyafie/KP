<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="h5 text-gray-900 "><?= $title; ?></h4>
                                </div>
                                <form class="user" method="POST" action="">
                                    <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="menu">Menu Name</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu'] ?>">
                                                <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-user btn-block">
                                        Save
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('menu') ?>">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->