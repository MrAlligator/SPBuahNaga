        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </div>
                <div class="card-body">
                    <form class="row gy-2 gx-3 align-items-center" action="<?= base_url('admin/home/tambah_gj') ?>" method="POST" enctype="multipart/form-data">
                        <div class="col-auto">
                            <label class="visually-hidden" for="kd1">Kode Gejala</label>
                            <div class="input-group">
                                <input type="text" class="form-control input-group-text" id="kd1" name="kd1" value="G" size="1" readonly>
                                <input type="text" class="form-control input-group-text align-center" id="kd3" name="kd3" value="<?php
                                                                                                                                    if ($jumlahgejala < 10) {
                                                                                                                                        echo "00";
                                                                                                                                    } else if ($jumlahgejala < 100) {
                                                                                                                                        echo "0";
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }
                                                                                                                                    ?>">
                                <input type="text" class="form-control" id="kd2" name="kd2" value="<?= $jumlahgejala + 1 ?>" readonly>
                                <input type="text" class="form-control" id="kd" name="kd" hidden>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="visually-hidden" for="nama">Gejala</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-capitalize" id="gejala" name="gejala" onclick="copytextbox();" size="50"><?= form_error('gejala', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <script>
                            function copytextbox() {
                                document.getElementById('kd').value = document.getElementById('kd1').value + document.getElementById('kd3').value + document.getElementById('kd2').value
                                // document.getElementById('kd').value = document.getElementById('kd2').value
                            }
                        </script>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->