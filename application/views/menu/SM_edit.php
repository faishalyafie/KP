<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row ">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="h5 text-gray-900 "><?= $title; ?></h4>
                                </div>
                                <form class="user" method="POST" action="">
                                    <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                                    <div class="form-group">
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <label for="title">Title</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control" id="title" name="title" value="<?= $menu['title'] ?>">
                                                <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <label for="icon">Icon</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control" id="icon" name="icon" value="<?= $menu['icon'] ?>">
                                                <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <label for="active">Status</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <select name="active" id="active" class="form-control">
                                                    <option value="">Select Activation</option>

                                                    <?php if ($menu['is_active'] == 1) : ?>
                                                        <?php $tampung = "Active" ?>
                                                    <?php else : ?>
                                                        <?php $tampung = "Non-Active" ?>
                                                    <?php endif; ?>

                                                    <?php foreach ($status as $s) : ?>
                                                        <?php if ($s == $tampung) : ?>
                                                            <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $s; ?>"><?= $s; ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?= form_error('active', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-danger btn-user btn-block">
                                        Save
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('menu/submenu') ?>">Back</a>
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