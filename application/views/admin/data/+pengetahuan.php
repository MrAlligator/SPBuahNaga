        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= base_url('admin/home/tambah_prb') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="hp">Hama / Penyakit</label>
                            <select id="hp" name="hp" class="form-control">
                                <?php foreach ($hamapenyakit as $hp) { ?>
                                    <option value="<?php echo $hp->id_hamapenyakit ?>"><?php echo $hp->hamapenyakit ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gj">Gejala</label>
                            <select id="gj" name="gj" class="form-control">
                                <?php foreach ($gejala as $gj) { ?>
                                    <option value="<?php echo $gj->id_gejala ?>"><?php echo $gj->gejala ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prb">Probabilitas</label>
                            <input type="number" id="prb" name="prb" class="form-control" placeholder="Probabilitas" step="0.01" min=0.01 max=1.0><?= form_error('prb', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->