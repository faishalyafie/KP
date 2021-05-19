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
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="POST" action="<?= base_url('user/change'); ?>">
                                    <div class="form-group">
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <label for="password">Current Password</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="password" class="form-control" id="password" name="password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-4 ">
                                                <label for="pass1">New Password</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="password" class="form-control" id="pass1" name="pass1">
                                                <?= form_error('pass1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-4 ">
                                                <label for="pass2">Confirm Password</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="password" class="form-control" id="pass2" name="pass2">
                                                <?= form_error('pass2', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-danger btn-user btn-block">
                                        Save
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('user/card') ?>">Back</a>
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