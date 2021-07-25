        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php echo base_url('assets/img/userimage/') . $user['foto_user']; ?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $user['name']; ?></h5>
                            <p class="card-text"><small class="text-muted">Joined Since <?php echo date('d F Y', $user['date_created']); ?></small></p>
                            <a href="<?= base_url('admin/profile/editprof') ?>" class="btn btn-primary btn-user btn-block">
                                Edit Profil
                            </a>
                            <a href="<?= base_url('admin/profile/editpass') ?>" class="btn btn-primary btn-user btn-block">
                                Edit Password
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->