        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </div>
                <div class="card-body">
                    <form class="row gy-2 gx-3 align-items-center" action="<?= base_url('admin/home/tambah_hp') ?>" method="POST" enctype="multipart/form-data">
                        <div class="col-auto">
                            <label class="visually-hidden" for="kd1">Kode Hama Penyakit</label>
                            <div class="input-group">
                                <input type="text" class="form-control input-group-text" id="kd1" name="kd1" value="HP" width="50px" readonly>
                                <input type="text" class="form-control" id="kd2" name="kd2" value="<?= $jumlahhama + 1 ?>" readonly>
                                <input type="text" class="form-control" id="kd" name="kd" hidden>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="visually-hidden" for="nama">Nama Hama / Penyakit</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-capitalize" id="nama" name="nama" onclick="copytextbox();"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <script>
                            function copytextbox() {
                                document.getElementById('kd').value = document.getElementById('kd1').value + document.getElementById('kd2').value
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