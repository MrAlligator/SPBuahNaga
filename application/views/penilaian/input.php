        <!-- Begin Page Content -->
        <div class="container-fluid">

            <?php echo $this->session->flashdata('message'); ?>

            <!-- Page Heading -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Input Nilai Pakar oleh Pakar</h6>
                </div>
                <div class="card-body">
                    <form id="form1" method="POST" action="<?= base_url('penilaian') ?>">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="hama">Pilih Hama dan Penyakit</label>
                                <select id="hama" name="hama" class="form-control" onchange="change()">
                                    <option selected disabled>Pilih...</option>
                                    <?php foreach ($hamapenyakit as $hp) { ?>
                                        <option value="<?php echo $hp->hamapenyakit ?>"><?php echo $hp->hamapenyakit ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <?php foreach ($gejala as $gj) { ?>
                                <div class="form-check form-check-inline col-12">
                                    <input class="form-check-input" type="checkbox" id="gjl[]" name="gjl[]" value="<?= $gj->gejala ?>"><?= $gj->gejala ?></input>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- <div class="form-row" hidden>
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div> -->
                        <hr>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                    <script type="text/javascript">
                        function myFunction() {
                            var x = document.getElementById("1");
                            if (x.hidden == "true") {
                                x.hidden == "false";
                            } else {
                                x.hidden == "true";
                            }
                        }

                        function change() {
                            document.getElementById("id[]").value = document.getElementById("hama").value;
                        }
                    </script>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        </div>