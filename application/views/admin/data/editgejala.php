        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
                </div>
                <div class="card-body">
                    <form class="row gy-2 gx-3 align-items-center" action="" method="POST" enctype="multipart/form-data">
                        <div class="col-auto">
                            <div class="input-group" hidden>
                                <input type="text" class="form-control" id="id" name="id" value="<?php echo $gjid->id_gejala ?>">
                            </div>
                        </div>
                        <div class=" col-auto">
                            <label class="visually-hidden" for="kd">Kode Gejala</label>
                            <div class="input-group">
                                <input type="text" class="form-control input-group-text" id="kd" name="kd" value="<?php echo $gjid->kode_gejala ?> " readonly>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="visually-hidden" for="nama">Gejala</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-capitalize" id="gejala" name="gejala" value="<?php echo $gjid->gejala ?>"><?= form_error('gejala', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->