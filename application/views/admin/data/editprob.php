        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="hp">Hama / Penyakit</label>
                            <select id="hp" class="form-control">
                                <?php foreach ($hamapenyakit as $hp) { ?>
                                    <option value="<?php echo $hp->id_hamapenyakit ?>"><?php echo $hp->hamapenyakit ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gj">Gejala</label>
                            <select id="gj" class="form-control">
                                <option selected="<?= $prbid->id_gejala ?>"></option>
                                <?php foreach ($gejala as $gj) { ?>
                                    <option value="<?php echo $gj->id_gejala ?>"><?php echo $gj->gejala ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-row align-items-center">
                            <div class="col-sm-3 my-1">
                                <label class="sr-only" for="prb">Probabilitas</label>
                                <input type="number" class="form-control" id="prb" step="0.1" min=0.0 max=1.0 value="<?= $prbid->probabilitas ?>">
                            </div>
                            <div class="col-auto my-1">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->