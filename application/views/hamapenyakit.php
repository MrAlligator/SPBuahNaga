        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h5 mb-4 text-gray-800">Isi data berikut!</h1>
            <div class="col-lg-7">
                <?php echo $this->session->flashdata('message'); ?>
                <form action="<?= base_url('konsul') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <?php if (isset($user['email'])) : ?>
                            <label for="nama" class="col-sm-3 col-form-label">Nama*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $user['name']; ?>" readonly><?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        <?php else : ?>
                            <label for="nama" class="col-sm-3 col-form-label">Nama*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label">Jenis Buah Naga*</label><br>
                        <div class="col-sm-9">
                            <select class="form-control" name="jenis" id="jenis" required>
                                <option value='Hylocereus undatus'>Kulit Merah, Daging Putih (Hylocereus undatus)</option>
                                <option value='Hylocereus polythizus'>Kulit Merah, Daging Merah Keunguan (Hylocereus polythizus)</option>
                                <option value='Hylocereus Costaricensis'>Kulit Lebih Merah, Daging Lebih Merah (Hylocereus Costaricensis)</option>
                                <option value='Selencereus Megalanthus'>Kulit Kuning, Daging Putih (Selencereus Megalanthus)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi Kebun*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lokasi" name="lokasi"><?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary">Konsultasi</button>
                        </div>
                    </div>
                </form>
                <div class="card-footer small text-muted">
                    * Harus di isi
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->